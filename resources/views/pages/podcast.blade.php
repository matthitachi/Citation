
@extends('layout.main')
@section('style', strtoupper($style))


@section('citation_source')
    <nav class="navbar navbar-expand-lg navbar-light  " id="citation_source">
        <div class="logo text-uppercase" >
            <h5 class="hidden-md hidden-lg" style="color: black">Select Citation Source</h5>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbar2" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-arrow-down"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar2">
            <div class="navbar-nav m-auto">
                <!--<a class="nav-item nav-link pl-4 pr-4 active" href="#">APA <span class="sr-only">(current)</span></a>-->
                <a class="nav-item nav-link pl-4 pr-4" href="/{{$style}}/website" >Website</a>
                <a class="nav-item nav-link pl-4 pr-4" href="/{{$style}}/book"   >Book</a>
                <a class="nav-item nav-link pl-4 pr-4" href="/{{$style}}/journal" >Journal</a>
                <a class="nav-item nav-link pl-4 pr-4" href="/{{$style}}/ebook" >E-book</a>
                <li class="nav-item dropdown pl-4 pr-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More Sources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item " href="/{{$style}}/newspaper" >Newspaper</a>
                        <a class="dropdown-item" href="/{{$style}}/interview" >Interview</a>
                        <a class="dropdown-item" href="/{{$style}}/film" >Film</a>
                        <a class="dropdown-item" href="/{{$style}}/dissertation" >Dissertation</a>
                        <a class="dropdown-item" href="/{{$style}}/email" >Email</a>
                        <a class="dropdown-item" href="/{{$style}}/blog" >Blog</a>
                        <a class="dropdown-item active" href="/{{$style}}/podcast" >Podcast</a>
                        <a class="dropdown-item" href="/{{$style}}/lecture" >Presentation or Lecture</a>
                        <a class="dropdown-item" href="/{{$style}}/image" >Online Image or Video</a>
                    </div>
                </li>

            </div>
        </div>
    </nav>
@stop

@section('content')

    <div class="form-body m-5">
        <form onsubmit="blog_form(event)">
            <input type="hidden" name="source" id="citation_type" value="blog">
            <input type="hidden" name="style"  value="{{$style}}">
            <div class="form-group row">
                <label for="subject" class="col-sm-3 col-form-label">Subject</label>
                <div class="col-sm-9">
                    <select id="subject" class="form-control" name="subject">
                        <option value="">Please select your subject...</option>
                        <option value="1">Biology</option>
                        <option value="2">Business &amp; Management</option>
                        <option value="3">Chemistry</option>
                        <option value="4">Computer Sciences &amp; Information Technology</option>
                        <option value="5">Creative writing</option>
                        <option value="6">Education</option>
                        <option value="7">Engineering &amp; Construction</option>
                        <option value="8">English, Literature &amp; Philology</option>
                        <option value="9">Finance and accounting</option>
                        <option value="10">Geography</option>
                        <option value="11">Health sciences and nursing</option>
                        <option value="12">History</option>
                        <option value="13">Journalism &amp; Mass Communication</option>
                        <option value="14">Law</option>
                        <option value="15">Macro &amp; Micro economics</option>
                        <option value="16">Marketing</option>
                        <option value="17">Mathematics</option>
                        <option value="18">Music, Visual Arts, &amp; Film Studies</option>
                        <option value="19">Other</option>
                        <option value="20">Philosophy</option>
                        <option value="21">Physics &amp; Natural Sciences</option>
                        <option value="22">Psychology</option>
                        <option value="23">Religion &amp; Theology</option>
                        <option value="24">Social &amp; Political Sciences</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Author</label>
                <div class="col-sm-9">
                    <div id="author">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control"  name="firstname" placeholder="First name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control"  name="lastname" placeholder="Last name">
                            </div>
                        </div>
                    </div>

                    <script>
                        function add() {
                            $('document').ready(function () {
                                var j = '<div class="row mt-2">' +
                                    '                                                    <div class="col-6">' +
                                    '                                                        <input type="text" class="form-control"  name="firstname" placeholder="First name">' +
                                    '                                                    </div>' +
                                    '                                                    <div class="col-6">' +
                                    '                                                        <input type="text" class="form-control"  name="lastname" placeholder="Last name">' +
                                    '                                                    </div>' +
                                    '                                                </div>';
                                $("#author").append(j);
                            });
                        }
                    </script>
                    <div class="add-author">
                        <a href="javascript:void(0)" onclick="add()"> <span><i class="fa fa-plus-circle" aria-hidden="true"></i> Add another author</span></a>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pop" class="col-sm-3 col-form-label">Podcast  Date</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-4">
                            <input type="number" class="form-control" name="year" placeholder="YYYY">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" name="month" placeholder="MM">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" name="day" placeholder="DD">
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Podcast  title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter the podcast  title">
                </div>
            </div>
<div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">URL</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="url" placeholder="Enter podcast  url">
                </div>
            </div>

            <div class="form-group row">
                <label for="pop" class="col-sm-3 col-form-label">Access Date</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-4">
                            <input type="number" class="form-control" name="access_year" placeholder="YYYY">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" name="access_month" placeholder="MM">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" name="access_day" placeholder="DD">
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block" >Generate Citation</button>
            </div>
        </form>
    </div>

@stop
