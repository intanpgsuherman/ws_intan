@extends('AdminLayout/index')
@section('content')

<?php
$json = file_get_contents(public_path('dosen.xml'));