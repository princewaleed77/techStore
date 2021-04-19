<?php
namespace techstore\Classes\Validation;

// سيتم تجميع كل القواعد المطلوبة فى هذا الكلاس بحيث يسهل عليا 
//   (بالرغم من مخالفة قواعد مبادىء السوليد فى الكتابة
//  لنظافة الكود (عمل اوبجيكت من الكلاس كل مرة وليس توريثه فقط 
class Validator
{

    private $errors = [];
    
    public function validate(string $inputName, $value, array $rules)
    {
        foreach ($rules as $rule) {
            // ماينفعش اعمل اوبجيكت من المتغير على طول بنعمل الاول ربط مع النيم سبيس بتاعة ونحطة جوة متغير تانى
            $className = "techstore\\Classes\\Validation\\".$rule;
            $obj = new $className;

            // لغيتهم عشان مبادىء السوليد واللى هايشتغل كده هو كود واحد لمرة واحدة فقط
            //  لان كل مرة هاعمل رول جديدة هاضطر ازودها هنا وده مخالف للقواعد 
            // وحنا ممكن نستخدم اسم الكلاس هو اسم الرول
            // $rule عشان كده حطينا

            // -----------------------------------------
            // if ($rule == 'required') {
            //     $obj = new Required;
            // } elseif ($rule == 'Str') {
            //     $obj = new Str;
            // } elseif ($rule == 'max') {
            //     $obj = new Max;
            // } elseif ($rule == 'email') {
            //     $obj = new Email;
            // }
            // ----------------------------------------------

            $error = $obj->check($inputName, $value);
            if ($error !== false) {
                $this->errors[] = $error;
                break;
            }
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    //  اعمل حاجة تشيك على الاخطاء عشان اتعامل بيها مع قاعدة البيانات لو مفيش اخطاء هاحفظ البيانات
    public function hasErrors()
    {
        return !empty($errors);
        // if (empty($errors)) {
        //     return false;
        // }else
        // {
        //     return true;
        // }
    }
}
?>
