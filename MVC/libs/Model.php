<?php 

class Model
{
    protected $placeHolderProp = array();
    protected $fullNameProp;
    protected $subjectProp;
    protected $emailProp;
    protected $msgProp;

   public function __construct()
   {
        $this->placeHolderProp['%TITLE%'] = 'Contact Form';
        $this->placeHolderProp['%ERRORS%'] = 'Empty field';
        $this->placeHolderProp['%THEM_0%'] = THEM_0;
        $this->placeHolderProp['%THEM_1%'] = THEM_1;
        $this->placeHolderProp['%THEM_2%'] = THEM_2;
        $this->placeHolderProp['%THEM_3%'] = THEM_3;
        $this->placeHolderProp['%SELECT_0%'] = 'selected="selected"';
        $this->placeHolderProp['%SELECT_1%'] = '';
        $this->placeHolderProp['%SELECT_2%'] = '';
        $this->placeHolderProp['%SELECT_3%'] = '';
        $this->placeHolderProp['%ERR_SUBJECT%'] = '';
        $this->placeHolderProp['%FULLNAME%'] = '';
        $this->placeHolderProp['%ERR_NAME%'] = '';
        $this->placeHolderProp['%EMAIL%'] = '';
        $this->placeHolderProp['%ERR_EMAIL%'] = '';
        $this->placeHolderProp['%MSG%'] = '';
        $this->placeHolderProp['%ERR_MSG%'] = '';
        $this->placeHolderProp['%SUCCES%'] = '';
        $this->placeHolderProp['%ERR_SEND%'] = '';
   }
   	
	public function getArray()
   {
       return $this->placeHolderProp;
   }

    /**
     * Check fields form
     * @return bool
     */
    public function checkForm()
    {
        $this->placeHolderProp['%ERRORS%']= '';
        $errors = array();
        //Delete spaces and tags
        foreach ($_POST as $k => $v) {
            $_POST[$k] = trim(strip_tags($v));
        }

        $this->checkFullName();
        $this->checkSubject();
        $this->checkEmail();
        $this->checkMsg();

        if (($this->checkFullName()) && ($this->checkSubject()) && ($this->checkEmail()) && ($this->checkMsg()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    /**
     * check full name field
     */
    public function checkFullName()
    {
        //The name can not consist of numbers
        if (!preg_match('/[0-9]/', $_POST['fullName']))
        {
            //The field "Full name" must be more than two letters
            if(strlen($_POST['fullName']) > 2)
            {
                $this->placeHolderProp['%FULLNAME%'] = $_POST['fullName'];
                $this->fullNameProp = $this->placeHolderProp['%FULLNAME%'];
                return true;
            }
            else
            {
                $this->placeHolderProp['%ERR_NAME%']= 'The field "Full name" must be more than two letters!';
                $this->placeHolderProp['%FULLNAME%'] = $_POST['fullName'];
                return false;
            }
        }
        else
        {
            $this->placeHolderProp['%ERR_NAME%']= 'In the "Full name" field, you can enter only letters!';
            $this->placeHolderProp['%FULLNAME%'] = $_POST['fullName'];
            return false;
        }
	}

    /**
     * check subject input
     * @return bool
     */
	public  function checkSubject()
    {
        if ($_POST['subject'] != 0)
        {
            $str = '%SELECT_'.$_POST['subject'].'%';
            $this->placeHolderProp[$str] = 'selected="selected"';
            $this->placeHolderProp['%SELECT_0%'] = '';
            switch ($_POST['subject'])
            {
                case 1:
                    $this->subjectProp = THEM_1;
                    break;
                case 2:
                    $this->subjectProp = THEM_2;
                    break;
                case 3:
                    $this->subjectProp = THEM_3;
                    break;
            }

            return true;
        }
        else
        {
            $this->placeHolderProp['%ERR_SUBJECT%'] = 'Select a subject!';
            return false;
        }
    }

    /**
     * check email input
     * @return bool
     */
    public function checkEmail()
    {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $this->placeHolderProp['%EMAIL%'] = $_POST['email'];
            $this->emailProp = $this->placeHolderProp['%EMAIL%'];
            return true;
        }
        else
        {
            $this->placeHolderProp['%EMAIL%'] = $_POST['email'];
            $this->placeHolderProp['%ERR_EMAIL%'] = 'Wrong email input!';
            return false;
        }
    }

    /**
     * Check message input
     * @return bool
     */
    public function checkMsg()
    {
        if(strlen($_POST['msg']) > 10)
        {
            $this->placeHolderProp['%MSG%'] = $_POST['msg'];
            $this->msgProp = $this->placeHolderProp['%MSG%'];
            return true;
        }
        else
        {
            $this->placeHolderProp['%MSG%'] = $_POST['msg'];
            $this->placeHolderProp['%ERR_MSG%'] = 'Uncover your potential, enter a longer message';
            return false;
        }
    }


    /**
     * Send email
     * @return bool
     */
	public function sendEmail()
    {
        date_default_timezone_set('Europe/Kiev');
        $msg = 'From: '.$this->fullNameProp."\r\n";
	    $msg .= 'Message: ' . $this->msgProp . "\r\n";
	    $msg .= "\r\n".'IP-adress: '. $_SERVER['REMOTE_ADDR']. "\r\n";
	    $msg .= 'Date and time: '.date("Y-m-d H:i:s");

        $header = 'From: '.$this->emailProp . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'Reply-To: '. $this->emailProp . "\r\n" ;

        $send = mail(EMAIL_TO, $this->subjectProp, $msg, $header);
        if ($send)
        {
            $this->placeHolderProp['%FULLNAME%'] = '';
            $this->placeHolderProp['%SELECT_' . $_POST['subject'] . '%'] = '';
            $this->placeHolderProp['%SELECT_0%'] = 'selected="selected"';
            $this->placeHolderProp['%EMAIL%'] = '';
            $this->placeHolderProp['%ERRORS%'] = 'Empty field';
            $this->placeHolderProp['%MSG%'] = '';
            $this->placeHolderProp['%SUCCES%'] = 'Mail successfully sent!';
            return true;
        }
        else
        {
            $this->placeHolderProp['%ERR_SEND%'] = 'Error to send email';
            return false;
        }
	}		
}
