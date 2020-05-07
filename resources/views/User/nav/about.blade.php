<div id="about">
    <br/><br>
    <div class="container-fluid bg-1 text-center mt-5">
    <about class="borderBottom pb-2 font-weight-bolder about-title"> عن الفريق </about>

        <div class="container text-center mt-5 ">
            <div class="row justify-content-center about-info">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-5 d-inline-block">
                        <div class="bg-light col mb-1 mt-3">
                            <div class="well p-1"><br/>
                                <h4 class="font-weight-bold">الرؤية</h4>
                                {{ $about->vision }}
                            </div>
                        </div>
                        <div class="bg-light col">
                            <div class="well p-1"> <br/>
                                <h4 class="font-weight-bold">الرسالة</h4>
                                {{ $about->mission }}
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-7 d-inline-block align-self-center" >
                            <div class="bg-light col mb-1 mt-3 p-5">

                                <div class="well">
                                    <h4 class="font-weight-bold">نبذة عن الفريق</h4>
                                    {{ $about->about_us }}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-5 d-inline-block align-self-center">
                    <div class="bg-light col">
                        <div class="well p-1"> <br/>
                            <h4 class="font-weight-bold">الأهداف</h4>
                            {{ $about->goals }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 d-inline-block align-self-center" >
                    <div class="bg-light col mb-1 p-5">

                        <div class="well">
                            <h4 class="font-weight-bold">تاريخ تأسيس الفريق</h4>
                            {{ $about->date_of_found }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

