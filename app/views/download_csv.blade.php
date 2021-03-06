@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Download CSV File
@stop

{{--This allows a view to override the--}}
{{--main div's class value--}}
@section('container_class_value')
<?php $containerClass="XSmallWhite container"; ?>
@show
@section('content')

    <?php
        $answers = ExportCSV::all();
        //Get the answer id number
        $ansId = $answers->lists('eid', 'eid');

        //Get the max id so I know how long the for loop should run
        $maxID = Evaluation::max('id');

        $questions = Evaluation::all();        
        //Get the evaluation id number
        $evalId = $questions->lists('id', 'id');
    ?>

    @if($ansId == null)
        <p1> No evaluations have been completed yet.</p1>
    @elseif($ansId != null )    
        @for($i = 1; $i <= $maxID; $i++)
            {{--- Check to see if there is an answer for each questionnaire ---}}
            @if(array_key_exists($i, $ansId))
                {{ Form::open(array('route' => array('download_csv'))) }}

                {{--- eid is variable passed to controller, eid = $i ---}}
                {{ Form::hidden('eid', $i) }}            
      
                <div class = "form group">
                    <div class = "col-sm-12">
                        {{ Form::submit("Download responses for Questionnaire #$ansId[$i]", array('class'=>'btn cc-btn-primary btn-responsive')) }}
                    </div>                        
                </div>
                </br>  

                {{ Form::close() }}
            @endif
        @endfor                 
    @endif
@stop