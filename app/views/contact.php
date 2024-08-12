<main>
    <div class="row m-0">
        <div class="col-md-6 col-sm-12 text-center d-flex justify-content-center align-items-center">
            <img src="<?= BASEURL ?>/public/images/contact_logo.png" width="80%" height="90%" class="rounded-5 shadow-lg"/>
        </div>
        <div class="col-md-6 col-sm-12 pt-1">
            <div class="w-75 px-3 border mt-4 pb-3 rounded-5 border-top-0  form-container">
                <h2 class="mb-3 text-center">Looking forward to hear from you</h2>
                <div class="my-3">
                    <label for="email-input" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email-input" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="subject-input" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject-input" placeholder="I love cocacola">
                </div>
                <div class="mb-3">
                    <label for="message-input" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="message" id="message-input" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-danger w-100 shadow py-2 fs-4" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</main>