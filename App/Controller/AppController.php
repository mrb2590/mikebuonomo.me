<?php

namespace App\Controller;

use MiniMVC\Controller\Controller;
use MiniMVC\View\View;

/**
 * Just any random actions
 */
class AppController extends Controller
{
    public function resumeAction()
    {
        $filename = DOC_ROOT.'/public/docs/Mike.Buonomo.Resume';
        if (isset($this->paramVars['extension']) && $this->paramVars['extension'] == 'docx')
        {
            $filename .= '.docx';
            $contentType = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
        }
        else
        {
            $filename .= '.pdf';
            $contentType = 'application/pdf';
        }
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false);
        header("Content-Type: ".$contentType);
        header("Content-Disposition: attachment; filename=".basename($filename).";" );
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: ".filesize($filename));
        readfile($filename);
        exit;
    }
}
