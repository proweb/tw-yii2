<?php declare(strict_types=1);

namespace app\controllers;

use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\web\Response;

class ResponseController extends \yii\web\Controller
{
    public function actionIndex()
    {
          return "Controller: {$this->getUniqueId()} \n Action Full: {$this->action->getUniqueId()}  \n Action Only: {$this->action->id}";
    }
    public function actionText()
    {
        /**
         * We don't have text/plain format in Response
         * so we set header
         */
        $this->response->format = Response::FORMAT_RAW;
        $this->response->headers->add('Content-Type', 'text/plain; charset=utf-8');
        return 'text/plain Response';

    }
    public function actionJson()
    {
        $demoData = [
            'name' => 'Sergey',
            'role'=> 'developer',
            'skills' => ['PHP', 'Yii2', 'Node.js']
        ];
        return $this->asJson($demoData);
    }

    public function actionXml()
    {
        # Example @url - https://github.com/yiisoft/yii2/issues/14263#issuecomment-306780434

        $this->response->format = Response::FORMAT_XML;
        $demoData = [
            'name' => 'Sergey',
            'role'=> 'developer',
            'skills' => ['PHP', 'Yii2', 'Node.js']
        ];
        return $this->asXML($demoData);

    }

    public function actionRaw()
    {
        $this->response->format = Response::FORMAT_RAW;
        return 'RAW Response = html by default';
    }
    public function actionStream()
    {
         # TODO: Stream Realisation

    }

}
