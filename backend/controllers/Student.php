<?php

namespace backend\controllers;

class Student extends \yii\web\Controller
{
    public function actionCreateStudent()

    {

        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;

        $student = new Student();

        $student->scenario = Student:: SCENARIO_CREATE;

        $student->attributes = \yii::$app->request->post();


        if($student->validate())

        {

            $student->save();

            return array('status' => true, 'data'=> 'Student record is successfully updated');

        }

        else

        {

            return array('status'=>false,'data'=>$student->getErrors());

        }

    }



    public function actionCreateStudent()

    {

        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;

        $student = new Student();

        $student->scenario = Student:: SCENARIO_CREATE;

        $student->attributes = \yii::$app->request->post();


        if($student->validate())

        {

            $student->save();

            return array('status' => true, 'data'=> 'Student record is successfully updated');

        }

        else

        {

            return array('status'=>false,'data'=>$student->getErrors());

        }

    }

    public function actionCreateStudent()

    {

        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;

        $student = new Student();

        $student->scenario = Student:: SCENARIO_CREATE;

        $student->attributes = \yii::$app->request->post();


        if($student->validate())

        {

            $student->save();

            return array('status' => true, 'data'=> 'Student record is successfully updated');

        }

        else

        {

            return array('status'=>false,'data'=>$student->getErrors());

        }

    }
}