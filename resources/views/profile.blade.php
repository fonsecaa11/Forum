<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Socialize</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

</head>

<body>
@include('layouts.nav')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="content" class="content content-full-width">
                <!-- begin profile -->
                <div class="profile">
                    <div class="profile-header">
                        <!-- BEGIN profile-header-cover -->
                        <div class="profile-header-cover"></div>
                        <!-- END profile-header-cover -->
                        <!-- BEGIN profile-header-content -->
                        <div class="profile-header-content">
                            <!-- BEGIN profile-header-img -->
                            <div class="profile-header-img">
                                <img src="{{ asset('storage'.$avatars) }}" alt="">
                            </div>
                            <!-- END profile-header-img -->
                            <!-- BEGIN profile-header-info -->
                            <div class="profile-header-info">
                                <h4 class="m-t-10 m-b-5">{{Auth::user()->name}}</h4>
                                <p class="m-b-10">UXUI + Frontend Developer</p>
                                <a href="#" class="btn btn-sm btn-info mb-2">Edit Profile</a>
                            </div>
                            <!-- END profile-header-info -->
                        </div>
                        <!-- END profile-header-content -->
                        <!-- BEGIN profile-header-tab -->
                        <ul class="profile-header-tab nav nav-tabs">
                            <li class="nav-item"><a href="" class="nav-link_">POSTS</a></li>
                            <li class="nav-item"><a href="" class="nav-link_">INTERESTS</a></li>
                            <li class="nav-item"><a href="" class="nav-link_">FRIENDS</a></li>
                        </ul>
                        <!-- END profile-header-tab -->
                    </div>
                </div>
                <!-- end profile -->
                <!-- begin profile-content -->
                <div class="profile-content">
                    <!-- begin tab-content -->
                    <div class="tab-content p-0">
                        <!-- begin #profile-post tab -->
                        <div class="tab-pane fade active show" id="profile-post">
                            <!-- begin timeline -->
                            <ul class="timeline">
                                @foreach($topics as $topic)
                                    <li>
                                        <!-- begin timeline-time -->
                                        <div class="timeline-time">
                                            <span class="date" style="color: white">{{ date('d/m', strtotime($topic->created_at)) }}</span>
                                            <span class="time" style="color: white">{{ date('H:i', strtotime($topic->created_at)) }}</span>
                                        </div>
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="{{ asset('storage'.$avatars) }}" alt=""></span>
                                                <span class="username"><a href="javascript:;">{{Auth::user()->name}}</a> <small></small></span>
                                            </div>
                                            <div class="timeline-content">
                                                <p style="color: black">
                                                    {{$topic->text}}
                                                    <hr>
                                                    <img src="{{ asset('storage/'.$topic->path) }}" alt="">
                                                </p>
                                            </div>
                                            <div class="timeline-likes">
                                                <div class="stats-right">
                                                    <span class="stats-text">259 Shares</span>
                                                    <span class="stats-text">21 Comments</span>
                                                </div>
                                                <div class="stats">
                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                    </span>
                                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                    </span>
                                                    <span class="stats-total">4.3k</span>
                                                </div>
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                            </div>
                                            <div class="timeline-comment-box">
                                                <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                                <div class="input">
                                                    <form action="">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                                            <span class="input-group-btn p-l-10">
                                          <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                          </span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end timeline-body -->
                                    </li>
                                @endforeach
                            </ul>
                            <!-- end timeline -->
                        </div>
                        <!-- end #profile-post tab -->
                    </div>
                    <!-- end tab-content -->
                </div>
                <!-- end profile-content -->
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
