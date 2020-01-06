@extends('pages.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 aligncenter">
            <h3><strong>CONTACT US</stong></3><br>
        </div>
    </div>
    <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 aligncenter">
                <p style="color:#a2a2a2;font-weight: 600;font-size: 1.2em;">
                        Wherever you are in the world, we are only a call away. Get in touch with the following contact details.
                </p>
            </div>  
            <div class="col-sm-2"></div>  
    </div><br><br>

    <div class="row">
            <div class="col-sm"><span class=""></span></div>
            <div class="col-sm contact"><div class="glyphicon glyphicon-map-marker contacticon"></div></div>
            <div class="col-sm"><span class=""></span></div>
            <div class="col-sm"><span class=""></span></div>
            <div class="col-sm contact"><span class="glyphicon glyphicon-earphone contacticon"></span></div>
            <div class="col-sm"><span class=""></span></div>
            <div class="col-sm"><span class=""></span></div>  
            <div class="col-sm contact"><span class="fa fa-envelope-o contacticon"></span></div>
            <div class="col-sm"><span class=""></span></div>  
    </div> 
    <div class="row">
            <div class="col-sm aligncenter">
                <h5><strong>ADDRESS STREET</strong></h5>
                Address : House 5, 14 road gwarinpa, <br>Abuja FCT.
            </div>
            <div class="col-sm aligncenter">
                <h5><strong>NUMBER PHONE</strong></h5>
                Phone 1: +234 706 784 9898<br>
                Phone 2: +234 706 784 9898
            </div>
            <div class="col-sm aligncenter">
                <h5><strong>ADDRESS EMAIL</strong></h5>
                chinyelu@ibutechinyelu.com<br>
                ibutechinyelu@yahoo.com
            </div>
    </div> <br><br>
    <div class="row">
            <div class="col-sm-12 aligncenter">
                <h3><strong>TELL ME YOUR PROJECT</stong></h3><br>
            </div>
    </div>
    <form>
            <div class="row">
                    <div class="col-sm-6">
                        <input class="contacttext" type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="col-sm-6">
                        <input class="contacttext" type="text" name="name" placeholder="Your Email">
                    </div>
            </div><br>
            <div class="row">
                    <div class="col-sm-12">
                        <input class="contacttext" type="text" name="name" placeholder="Subject">
                    </div>
            </div><br>
            <div class="row">
                    <div class="col-sm-12">
                        <textarea class="contacttext" rows="3" name="name" placeholder="Message"></textarea>
                    </div>
            </div><br><br>
            <div class="row">
                    <div class="col-sm-12 aligncenter">
                        <button type="submit" class="solid-button">Send Message</button>
                    </div>
            </div>
    </form>

</div>
@endsection