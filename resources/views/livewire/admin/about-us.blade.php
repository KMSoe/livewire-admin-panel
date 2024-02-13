<div class="container-xxl flex-grow-1 container-p-y">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Front Pages/</span> About</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">About</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Banner Title</label>
                            <input type="text" class="form-control" id="basic-default-fullname"
                                placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Banner Description
                            </label>
                            <input type="text" class="form-control" id="basic-default-company"
                                placeholder="ACME Inc." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <trix-editor></trix-editor>
                            <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Phone No</label>
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Message</label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
</div>
