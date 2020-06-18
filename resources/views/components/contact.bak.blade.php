@section('contact')
<div class="section pp-scrollable slide-personal-contacts">
    <div class="slide-container">
        <div class="slide-bg">
            <div class="slide-photo circle-light slide-contacts-circle1 transformLeft"></div>
            <div class="slide-photo circle-brown slide-contacts-circle2 transformRight"></div>
        </div>
        <div class="container">
            <div class="slide-num">8</div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-personal-card">
                        <div class="contact-personal-card-title animate-element delay7 fadeInDown">
                            <h2 class="slide-title">contact</h2>
                        </div>
                        <div class="contact-personal-card-detail animate-element delay7 fadeInUp">
                            <div class="row">
                                <div class="col-xl-7 col-lg-10">
                                    <div class="title-mini">contact info</div>
                                    <div class="text-md text-uppercase">
                                        <a href="mailto:hayley.design@gmail.com"
                                            class="text-primary"><strong>zach@artkodes.com</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 animate-element delay7 fadeInUp">
                    <div class="slide-title-info">
                        Let's grab a coffee and jump on conversation
                        <span class="text-primary">chat with me.</span>
                    </div>
                    <form class="contact-personal-form a-ajax-form">
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Full name</label>
                            <input type="text" class="form-control" name="name" required />
                        </div>
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Email</label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Category</label>
                            <select class="form-control" name="category">
                                <option value=""></option>
                                <option value="branding">Web Development</option>
                                <option value="webdesign">Photography</option>
                                <option value="all">All</option>
                            </select>
                        </div>
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Project detail(optional)</label>
                            <textarea class="form-control" name="message" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group control-file a-file">
                            <input type="file" multiple />
                            <div class="file-path-wrapper">
                                <i class="lni lni-paperclip text-primary"></i>
                                <input class="file-path form-control" type="text"
                                    placeholder="Add Attachment(.doc;.pdf)" />
                            </div>
                        </div>
                        <div class="message text-success success-message">
                            Your message is successfully sent...
                        </div>
                        <div class="message text-danger error-message">
                            Sorry something went wrong
                        </div>
                        <div class="control-btn">
                            <button class="btn btn-success">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contact-fr')
<div class="section pp-scrollable slide-personal-contacts">
    <div class="slide-container">
        <div class="slide-bg">
            <div class="slide-photo circle-light slide-contacts-circle1 transformLeft"></div>
            <div class="slide-photo circle-brown slide-contacts-circle2 transformRight"></div>
        </div>
        <div class="container">
            <div class="slide-num">8</div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-personal-card">
                        <div class="contact-personal-card-title animate-element delay7 fadeInDown">
                            <h2 class="slide-title">contactez-moi</h2>
                        </div>
                        <div class="contact-personal-card-detail animate-element delay7 fadeInUp">
                            <div class="row">
                                <div class="col-xl-7 col-lg-10">
                                    <div class="title-mini">email</div>
                                    <div class="text-md text-uppercase">
                                        <a href="mailto:hayley.design@gmail.com"
                                            class="text-primary"><strong>zach@artkodes.com</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 animate-element delay7 fadeInUp">
                    <div class="slide-title-info">
                        prennons un café ?
                        <span class="text-primary">(par mail bien sûr)</span>
                    </div>
                    <form class="contact-personal-form a-ajax-form">
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Nom complet</label>
                            <input type="text" class="form-control" name="name" required />
                        </div>
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Email</label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Sujet</label>
                            <select class="form-control" name="category">
                                <option value=""></option>
                                <option value="developpement web">Développement web</option>
                                <option value="visuel">Photographie / Video</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-group form-group-material a-form-group">
                            <label class="label">Message</label>
                            <textarea class="form-control" name="message" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group control-file a-file">
                            <input type="file" multiple />
                            <div class="file-path-wrapper">
                                <i class="lni lni-paperclip text-primary"></i>
                                <input class="file-path form-control" type="text"
                                    placeholder="Add Attachment(.doc;.pdf)" />
                            </div>
                        </div>
                        <div class="message text-success success-message">
                            Votre message a bien été envoyé...
                        </div>
                        <div class="message text-danger error-message">
                            Oups, une erreur s'est produite
                        </div>
                        <div class="control-btn">
                            <button class="btn btn-success">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection