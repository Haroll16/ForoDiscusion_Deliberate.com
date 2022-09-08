<?php
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../');

include 'header.php';

include 'menu.php';
?>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
    integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
<div class="container">
    <div class="main-body p-0">
        <div class="inner-wrapper">
            <!-- Inner sidebar -->
            <div class="inner-sidebar">
                <!-- Inner sidebar header -->
                <div class="inner-sidebar-header justify-content-center">
                    <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal"
                        data-target="#threadModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-plus mr-2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Nueva Discusion
                    </button>

                </div>
                <!-- /Inner sidebar header -->

                <!-- Inner sidebar body -->
                <div class="inner-sidebar-body p-0">
                    <div class="p-3 h-100" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -16px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper"
                                        style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 16px;">
                                            <nav class="nav nav-pills nav-gap-y-1 flex-column">
                                                <a href="javascript:void(0)"
                                                    class="nav-link nav-link-faded has-icon active">Todas las
                                                    publicaciones</a>
                                                <a href="javascript:void(0)"
                                                    class="nav-link nav-link-faded has-icon">Popular de la semana</a>
                                                <a href="javascript:void(0)"
                                                    class="nav-link nav-link-faded has-icon">Popular de todo el
                                                    tiempo</a>
                                                <a href="javascript:void(0)"
                                                    class="nav-link nav-link-faded has-icon">Resuelto</a>
                                                <a href="javascript:void(0)"
                                                    class="nav-link nav-link-faded has-icon">Sin resovler</a>
                                                <a href="javascript:void(0)"
                                                    class="nav-link nav-link-faded has-icon">Sin respuestas</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                        </div>
                    </div>
                </div>
                <!-- /Inner sidebar body -->
            </div>
            <!-- /Inner sidebar -->

            <!-- Inner main -->
            <div class="inner-main">
                <!-- Inner main header -->
                <div class="inner-main-header">
                    <a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#"
                        data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
                    <select class="custom-select custom-select-sm w-auto mr-1">
                        <option selected="">Lo Ultimo</option>
                        <option value="1">Popular</option>
                        <option value="3">Resuelto</option>
                        <option value="3">Sin Resolver</option>
                        <option value="3">Sin Respuestas</option>
                    </select>
                    <span class="input-icon input-icon-sm ml-auto w-auto ">
                        <input type="text"
                            class=" form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4"
                            placeholder="Search forum" />

                    </span>
                </div>
                <!-- /Inner main header -->

                <!-- Inner main body -->

                <!-- Forum List -->
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                            class="text-body">What’s your Gaming opinion that will get you downvoted to
                                            oblivion?</a></h6>
                                    <p class="text-secondary">
                                        I’ll go first: People are being hyperbolic as hell about Cyberpunk 2077 and are
                                        using it as a punching bag while other games have gotten away with FAR worse.
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">drewdan</a> respondió <span
                                            class="text-secondary font-weight-bold">Hace 13 minutos</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                    <span><i class="far fa-comment ml-2"></i> 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                            class="text-body">Do you celebrate something similar to Thanksgiving?</a>
                                    </h6>
                                    <p class="text-secondary">
                                        Here in Puerto Rico we are celebrating Thanksgiving. Do you have something
                                        similar?
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">jlrdw</a> respondió <span
                                            class="text-secondary font-weight-bold">Hace 3 horas</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 18</span>
                                    <span><i class="far fa-comment ml-2"></i> 1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                            class="text-body">At what age did y’all start dating?</a></h6>
                                    <p class="text-secondary">
                                        Asking because I haven’t dated anyone yet and I’m not sure if that’s weird lol.
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">ciungulete</a> respondió <span
                                            class="text-secondary font-weight-bold">Hace 7 horas</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 32</span>
                                    <span><i class="far fa-comment ml-2"></i> 2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                            class="text-body">When did you realize, she didn’t love you anymore?</a>
                                    </h6>
                                    <p class="text-secondary">
                                        I was just looking at old photo of my ex and came to a Realization, that I could
                                        pin point the exact moment i realized she stop loving me. It’s also been
                                        officially a year today since she last contacted me. This passed year hasn’t
                                        been easy.
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">bugsysha</a> respondió <span
                                            class="text-secondary font-weight-bold">Hace 11 horas</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 49</span>
                                    <span><i class="far fa-comment ml-2"></i> 9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                            class="text-body">Is there a kpop group that feels like “just coworkers
                                            together” to you?</a></h6>
                                    <p class="text-secondary">
                                        Just curious, I don’t think I’ve seen a group that fits that description (but to
                                        be fair I am fairly new). But I’m sure groups like those probably do exist
                                        somewhere, or it’d be interesting to hear which popular groups right now feel
                                        that way to you in your opinion.
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">jackalds</a> respondió <span
                                            class="text-secondary font-weight-bold">Hace 12 horas</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 65</span>
                                    <span><i class="far fa-comment ml-2"></i> 10</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                            class="text-body">How do you tell your significant other you're going to
                                            take a dump?</a></h6>
                                    <p class="text-secondary">
                                        In terms of phrasing. Like I'm going to take a crap, shit, dump, poo, dookie
                                        squat? Surely there's some creative phrasing for this.
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">bugsysha</a> respondió <span
                                            class="text-secondary font-weight-bold">hace 14 horas</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 45</span>
                                    <span><i class="far fa-comment ml-2"></i> 4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                            class="text-body">What is a scene in one piece that always felt so out of
                                            place and oddly strange to you?</a></h6>
                                    <p class="text-secondary">
                                        For me it has always been chopper leading a sleigh that looked as though it was
                                        flying. This clear reference to santa just always felt so strange to me and I
                                        never really understood why Oda put it in One piece.
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">michaeloravec</a> respondió <span
                                            class="text-secondary font-weight-bold">Hace 18 horas</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 70</span>
                                    <span><i class="far fa-comment ml-2"></i> 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
                        <li class="page-item disabled">
                            <span class="page-link has-icon"><i class="material-icons">chevron_left</i></span>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item active"><span class="page-link">2</span></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item">
                            <a class="page-link has-icon" href="javascript:void(0)"><i
                                    class="material-icons">chevron_right</i></a>
                        </li>
                    </ul>
                </div>
                <!-- /Forum List -->

                <!-- Forum Detail -->
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content">
                    <a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse"
                        data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="media forum-item">
                                <a href="javascript:void(0)" class="card-link">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle"
                                        width="50" alt="User" />
                                    <small class="d-block text-center text-muted">Newbie</small>
                                </a>
                                <div class="media-body ml-3">
                                    <a href="javascript:void(0)" class="text-secondary">Mokrani</a>
                                    <small class="text-muted ml-2">Hace 1 hora</small>
                                    <h5 class="mt-1">Ladies, what are some compliments from men that you just don't see
                                        as compliments? Why?</h5>
                                    <div class="mt-3 font-size-sm">
                                        <p>
                                            When a man says 'I like that you're x, y and z' as a compliment and you
                                            don't agree that it's an important trait and end up not being flattered.
                                            What are your examples and why?
                                        </p>
                                    </div>
                                </div>
                                <div class="text-muted small text-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                    <span><i class="far fa-comment ml-2"></i> 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="media forum-item">
                                <a href="javascript:void(0)" class="card-link">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle"
                                        width="50" alt="User" />
                                    <small class="d-block text-center text-muted">Pro</small>
                                </a>
                                <div class="media-body ml-3">
                                    <a href="javascript:void(0)" class="text-secondary">drewdan</a>
                                    <small class="text-muted ml-2">Hace 1 hora</small>
                                    <div class="mt-3 font-size-sm">
                                        <p>What are some things road cars implemented from F1?
                                        </p>
                                        <p>I’ve always been curious about what F1 developments road cars got.</p>
                                    </div>
                                    <button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart"
                                            aria-hidden="true"></i>1</button>
                                    <a href="javascript:void(0)" class="text-muted small">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Forum Detail -->

                <!-- /Inner main body -->
            </div>
            <!-- /Inner main -->
        </div>

        <!-- New Thread Modal -->
        <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header d-flex align-items-center bg-primary text-white">
                            <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="threadTitle">Title</label>
                                <input type="text" class="form-control" id="threadTitle" placeholder="Enter title"
                                    autofocus="" />
                            </div>
                            <textarea class="form-control summernote" style="display: none;"></textarea>

                            <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                                <input type="file" class="custom-file-input" id="customFile" multiple="" />
                                <label class="custom-file-label" for="customFile">Attachment</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
body {
    margin-top: 20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}

.inner-wrapper {
    position: relative;
    height: calc(100vh - 3.5rem);
    transition: transform 0.3s;
}

@media (min-width: 992px) {
    .sticky-navbar .inner-wrapper {
        height: calc(100vh - 3.5rem - 48px);
    }
}

.inner-main,
.inner-sidebar {
    position: absolute;
    top: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
}

.inner-sidebar {
    left: 0;
    width: 235px;
    border-right: 1px solid #cbd5e0;
    background-color: #fff;
    z-index: 1;
}

.inner-main {
    right: 0;
    left: 235px;
}

.inner-main-footer,
.inner-main-header,
.inner-sidebar-footer,
.inner-sidebar-header {
    height: 3.5rem;
    border-bottom: 1px solid #cbd5e0;
    display: flex;
    align-items: center;
    padding: 0 1rem;
    flex-shrink: 0;
}

.inner-main-body,
.inner-sidebar-body {
    padding: 1rem;
    overflow-y: auto;
    position: relative;
    flex: 1 1 auto;
}

.inner-main-body .sticky-top,
.inner-sidebar-body .sticky-top {
    z-index: 999;
}

.inner-main-footer,
.inner-main-header {
    background-color: #fff;
}

.inner-main-footer,
.inner-sidebar-footer {
    border-top: 1px solid #cbd5e0;
    border-bottom: 0;
    height: auto;
    min-height: 3.5rem;
}

@media (max-width: 767.98px) {
    .inner-sidebar {
        left: -235px;
    }

    .inner-main {
        left: 0;
    }

    .inner-expand .main-body {
        overflow: hidden;
    }

    .inner-expand .inner-wrapper {
        transform: translate3d(235px, 0, 0);
    }
}

.nav .show>.nav-link.nav-link-faded,
.nav-link.nav-link-faded.active,
.nav-link.nav-link-faded:active,
.nav-pills .nav-link.nav-link-faded.active,
.navbar-nav .show>.nav-link.nav-link-faded {
    color: #3367b5;
    background-color: #c9d8f0;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #467bcb;
}

.nav-link.has-icon {
    display: flex;
    align-items: center;
}

.nav-link.active {
    color: #467bcb;
}

.nav-pills .nav-link {
    border-radius: .25rem;
}

.nav-link {
    color: #4a5568;
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}
</style>
<script src="<?php echo JS_PATH;?>jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
</script>