<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Questionnair as Quest;
use App\Models\Question as Deseptive;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class Questionnair extends Component
{
    // ایجاد صفحه بندی برای پرسش نامه های کاربر
    use WithPagination;
    use WithFileUploads;
    
    protected $paginationTheme = 'bootstrap';

    // متغیرها برای تغییر صفحه به قسمت های مختلف  
    public $questionPart = false;
    public $indexPart = true;

    public $updateQN = false;
    public $QTAPart = false;
    public $fileSection= false;
    public $videoSection = true;


   
    

    public $allQuestionsPart = true;
    // متغیرها برای قسمت پرسش نامه
    public 
    $qunair,
    // $qunairs,
    $name,
    $q_id,
    $c_id,
    $u_id;
    // جستجو
    public $search = '';


    // متغیرهای لازم برای سوالات
    public $s_id,$allQuestion,$question,$sText, $stype, $sstate = true, $force_answer, $image_url, $video_url;

    // قبل از لود شدن صفحه این متد اجرا می شود 
    public function mount()
    {
        $this->u_id = Auth::id();
        $this->questionPart = false;
        $this->indexPart = true;
        $this->QTAPart = false;
        
    }

    // ریست کردن متغیرهای نام پرسش نامه و سوال
    private function resetInputFields(){
        $this->name = '';
        $this->sText = '';
    }

    // گرفتن یک پرسش نامه و ذخیره در متغیر عمومی
    public function getOneQNair($id)
    {
        $this->qunair = Quest::find($id);
    }
    // گرفتن یک سوال و ذخیره در متغیر عمومی
    public function getOneQuestion($id)
    {
        $this->question = Deseptive::find($id);
    }
    // رندر کردن ویو صفحه به همرا اطلاعات پرسش نامه ها

    public function render()
    {
        // $this->getQNairs();
        return view('livewire.user.questionnair.questionnair',[
            'qunairs'=> Quest::where([
               [ 'u_id' , $this->u_id],
               ['qname', 'like', '%'.$this->search.'%']
            ])->paginate(4)
        ]);
    }

    // ذخیره اطلاعات پرسشنامه
    public function storeQNair()
    {
       
        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'], 
        ]);
        $itemsID = DB::table('questionnairs')->insertGetId([ 
            'qname' =>  $validatedDate['name'],
            'u_id' =>  $this->u_id,
            'c_id' =>  1,
            'qstate' =>  0
            ]);
        
        $this->resetInputFields();

        $this->q_id =$itemsID;
        $this->name =$validatedDate['name'];
        // session()->flash('message', 'createQNair');
        $this->Change_to_question();
    }
    // حذف پرسش نامه به همراه تمام سوالات زیر مجموعه اش
    public function deleteQNair($id)
    {
        Quest::find($id)->delete();
        Deseptive::where('q_id',$id)->delete();
        session()->flash('message', 'deleteQNair');
    }
    //  تغیر فعال و غیر فعال بودن پرسش نامه
    public function changeQState($id,$qstate)
    {
        if($qstate === 1){
             Quest::where('id',$id)->update([
            'qstate' => 0,
            'qnr_url'=> ''
        ]);
        $this->render();
        }
        elseif($qstate === 0){
             $random = Str::random(40);
            Quest::where('id',$id)->update([
                'qstate' => 1,
                'qnr_url'=> $random
            ]);
        $this->render();

        }
    }
    // باز کردن قسمت ویرایش پرسش نامه
    public function editQNair($id)
    {
        $qust = Quest::findOrFail($id);
        $this->q_id = $id;
        $this->name = $qust->qname;
        $this->updateQN = true;
    }
    // ارسال اطلاعات ویرایش شده به قسمت سرور
    public function updateQNair()
    {
        Quest::where('id',$this->q_id)->update([
            'qname' => $this->name
        ]);
        $this->updateQN = false;
        $this->resetInputFields();
        session()->flash('message', 'updateQNair');
    }
    // ست کردن اطلاعات یک پرسش نامه
    public function showQNair($id)
    {
        $qust = Quest::findOrFail($id);
        $this->q_id = $id;
        $this->name = $qust->qname;

    }
    // تغیر صفحه به نمایش تمام پرسش نامه ها
    public function Change_to_index()
    {
        $this->questionPart = false;
        $this->indexPart = true;  
    }
    // تغییر صفحه به نمایش اطلاعات یک پرسش نامه تازه ایجاد شده
    public function Change_to_question()
    {
        $this->getOneQNair($this->q_id);
        $this->questionPart = true;
        $this->indexPart = false; 

        if($this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->get();
        }elseif(!$this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->get();
        }

    }
    // تغییر صفحه به نمایش اطلاعات یک پرسش نامه از قبل ایجاد شده 
    public function show_questions($qid)
    {
        $this->getOneQNair($qid);
        $this->questionPart = true;
        $this->indexPart = false; 
        $this->q_id = $qid;
        

        if($this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->orderBy('number', 'asc')->get();
        }elseif(!$this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->orderBy('number', 'asc')->get();
        }

    }
    // نمایش قسمت ایجاد یک سوال تشریحی با جواب کوتاه
    public function Change_to_Add_questionT()
    {
        if($this->QTAPart === false){
            $this->QTAPart = true;
        }else{
            $this->QTAPart = false;
        }

    }
    // 
    public function deletequestion($id)
    {
        Deseptive::find($id)->delete();
        $this->allQuestion = Deseptive::where([
            [ 'q_id' , $this->q_id],
         ])->orderBy('number', 'asc')->get();
        
    }
    //  ذخیره اطلاعات سوال تشریحی با جواب کم
    public function storeTQuestion()
    {
        $bigest = Deseptive::where('q_id',$this->q_id)->max('number');
        $bigest++;
        $validatedDate = $this->validate([
            'sText' => ['required', 'string', 'max:255'], 
            // 'image_url' => 'required',
            // 'video_url' => 'string',
        ]);
        
        $this->QTAPart = false;
        $this->stype = 1;
        if(!$this->sstate)$this->sstate = 0;else$this->sstate = 1;
        if(!$this->force_answer)$this->force_answer = 0;else$this->force_answer = 1;
        if($this->image_url)
            $filename = $this->image_url->store('uploads','public');
        else
            $filename = '';
        

        
        Deseptive::insert([
             'stext' => $validatedDate['sText'],
             'stype' => $this->stype,
             'q_id' => $this->q_id,
             'u_id' => $this->u_id,
             'sstate'=>$this->sstate,
             'force_answer'=>$this->force_answer,
             'number'=>$bigest,
             'number_status'=>true,
             'image_url'=>$filename,
             'video_url'=>$this->video_url,
             'created_at' => now()
        ]);
        
        // session()->flash('message', 'createQuestion');

        $this->allQuestion = Deseptive::where([
            [ 'q_id' , $this->q_id],
         ])->get();
         $this->resetInputFields();
    }

    // بخش ویرایش یک سوال

    public function editeQuestion($id)
    {

        $this->getOneQuestion($id);

        $this->s_id = $id;
        $this->u_id = $this->question->u_id;
        $this->q_id = $this->question->q_id;
        $this->sText = $this->question->stext;

        if($this->allQuestionsPart===false){
            $this->allQuestionsPart = true;
        }else{
            $this->allQuestionsPart = false;
        }
            
    }

    public function updateQuestion()
    {
        $validatedDate = $this->validate([
            'sText' => ['required', 'string', 'max:255'], 
        ]);

        Deseptive::where('id',$this->s_id)->update([
            'stext' => $this->sText,
            'q_id' => $this->q_id,
            'u_id' => $this->u_id,
        ]);
        $this->allQuestionsPart = true;
        $this->show_questions($this->q_id);
        $this->resetInputFields();
    }

    public function cancelupdateQuestion()
    {
        $this->allQuestionsPart = true;
        $this->show_questions($this->q_id);
        $this->resetInputFields();
    } 
    public function change_file_section()
    {
        if ($this->fileSection) {
            $this->fileSection= false;
        }else{
            $this->fileSection= true;
        }
    }
   public function changeVideoSection($id)
   {
    if ($id===1) {
        $this->videoSection= true;
    }elseif($id===2){
        $this->videoSection= false;
    }
    
   } 
}
