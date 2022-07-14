<style>
    
    #team {
        background : grey;
        color : white;
    }

    #team h1, #contact h1, #pricing h1, #services h1, #quick-links h1 {
        color : white;
        letter-spacing : 8px;
        text-shadow : 0px 0px 8px #07649f;
        font-size : 40px;
        text-transform : uppercase;
        font-weight : 800;
        margin-bottom : 50px;
        width : 100%;
    }

    #team h2 {
        font-size : 30px;
        margin : 12px 8px 40px;
    }

    #team div {
        display : flex;
        flex-direction : column;
        align-items : center;
        justify-content: space-around;
        min-height : 300px;
        max-height : 300px;
        margin-bottom : 80px;
    }

    #team div img {
        height : 180px;
        width : 180px;
    }
</style>
<div id = team>


    <div>
        <img src="{{asset('images/Paris.jpg')}}" alt="" />
        <h2>Harrison NWAOGWUGWU</h2>
        <h4>CEO and Co-Founder, Mugupp</h4>
        <p> He is a Nigerian and a final year student of Geography Education at Obafemi Awolowo University, Nigeria.</p>
    </div>

    <div>
        <img src="{{asset('images/landing.jpg')}}" alt="" />
        <h2>Daniel NMECHA</h2>
        <h4>COO and Co-Founder, Mugupp</h4>
        <p> Daniel is a Nigerian, studying Computer Science at Ashesi University, Ghana. He is also the Project Manager in Ghana.</p>
    </div>

    <div>
        <img src="{{asset('images/Paris.jpg')}}" alt="" />
        <h2>Silas ILEMOBAYO</h2>
        <h4>CTO and Co-Founder, Mugupp</h4>
        <p>Silas is a Nigerian, studying Computer Science at Federal University of Technology, Akure, Nigeria. A full stack developer.</p>
    </div>

    <div>
        <img src="{{asset('images/Paris.jpg')}}" alt="" />
        <h2>Success OYEDELE</h2>
        <h4>Associate Member of Mugupp</h4>
        <p>He is a Nigerian, studying Physics Education at Obafemi Awolowo University, Nigeria.</p>
    </div>

    <div>
        <img src="{{asset('images/Paris.jpg')}}" alt="" />
        <h2>Mohammed ELMIR</h2>
        <h4>Associate Member of Mugupp</h4>
        <p> Mohammed is a Ghanaian, studying Electrical Engineering at Ashesi University Ghana. He is a Front End Developer.</p>
    </div>

    <div>
        <img src="{{asset('images/Paris.jpg')}}" alt="" />
        <h2>Tinashe KANUKAI</h2>
        <h4>Associate Member of Mugupp</h4>
        <p>Tinashe is a Zimbabwean, studying Computer Science at Ashesi Unversity. He is an Ethical Hacker and a coder. </p>
    </div>

    <br>
    <h1>Examination Board</h1>
    <div>
        
    </div>
</div>


                <!-- Admins Section Begin -->
                <section class="admin-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <span>We Are To Help You</span>
                                    <h2>Our admins</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="admin-carousel owl-carousel">
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="{{ asset('images/faces/5.jpg')}}" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Harry Nwa <span>Founder & Ceo</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="{{ asset('images/faces/2.jpg') }}" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Silas Ilem <span>CTO & Co-Founder</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="img/admin/admin-3.jpg" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Derrick Lawson <span>Company admins</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="img/admin/admin-4.jpg" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Clifford Colon <span>Saler Manager</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single-admin">
                                        <div class="sa-pic">
                                            <img src="img/admin/admin-5.jpg" alt="">
                                            <div class="hover-social">
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            </div>
                                        </div>
                                        <h5>Clifford Colon <span>Saler Manager</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- admin Section End -->

