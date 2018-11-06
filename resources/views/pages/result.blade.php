<?php
/**
 * Created by PhpStorm.
 * User: ITACHI
 * Date: 10/21/2018
 * Time: 9:29 AM
 */


//if(isset($_GET['type']) && $_GET['type'] !='null'){
//    $citation_type = $_GET['type'];
//
//?>

@extends('layout.main')
@section('style', strtoupper($style))
@section('navbar')
    @parent
@endsection



@section('content')
    <div class="form-body m-5">
        <h3 class="modal-title">Bibliography :</h3>
        <form>
            <div class="form-group">
                <div style="height: 200px; width: 100%; background-color: white; font-size: 17px;" class="p-5" id="cite_input">{!! session('result') !!} </div>
            </div>
            <h6 id="cite_info">{{ strtoupper($source) }} Citation information in {{ strtoupper($style) }} format.</h6>

            <div class="form-group">
                <button type="button" class="btn btn-primary"  onclick="cite_copy()" >copy</button>
                <a href="/" class="btn btn-secondary" >Close</a>
            </div>
        </form>
    </div>
@stop


@section('content_desc')
    @endsection
