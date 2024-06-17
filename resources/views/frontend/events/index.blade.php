@extends('frontend.layouts.master')

@section('content')


<main id="main">
<section class="counts section-bg">
     <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                 <img src="{{asset('storage/app/public/celeimages/'.$cele->banner)}}" class="img-fluid"  style="width:100%;">
             </div>
        </div>
    </div>
      <div class="container-fluid" style="margin-top:20px;">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="count-box" style="padding:30px;background-color:#005393;">
                <h6 style="font-size:14px;color:#fff;line-height:2;">
                <?php
              $celebrations=App\Models\Celebrate::all();
            ?>
            @foreach($celebrations as $celebrate)
              <li><a href="{{route('events',$celebrate->id)}}" style="color:#fff;"><b style="font-family: Satoshi, 69pt regular;color:#fff;">
              {{$celebrate->name}}</b><hr></a></li>
              @endforeach
                </h6>
            </div>
          </div>


          <div class="col-lg-8 col-md-6">
            <div class="row">

                   <div class="col-lg-12 col-md-12"  id="swiss">
                       <div class="count-box" style="padding:20px;">
                           <br>
                         <h6 style="font-size:16px;color:#000;"><b>{{$cele->name}}</b><h6>
                             <br>

                             <h6 style="font-size:16px;color:#000;line-height:2;">

                             {{$cele->name}}<br>
                                    Place       :  {{$cele->location}} <br>
                                    Date        :  {{$cele->date}}<br>
                                    Time        :  {{$cele->time}}<br>

                            <h6><br>

                            </b>
                                <p>
                                <h6 style="font-size:16px;color:#000;line-height:2;">

                                {!!html_entity_decode($cele->description)!!}

                                    </h6>


                                </p>


                      </div>
                      </div>
            </div>

             <div class="row">

                   <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">

<br>
                          <img src="{{asset('storage/app/public/celeimages/'.$cele->image1)}}" class="img-fluid">

                      </div>
                      </div>


                      <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">

<br>

                          <img src="{{asset('storage/app/public/celeimages/'.$cele->image2)}}" class="img-fluid">

                      </div>
                      </div>


                   <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">

<br>
                          <img src="{{asset('storage/app/public/celeimages/'.$cele->image3)}}" class="img-fluid">

                      </div>
                      </div>


                      <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">

<br>

                          <img src="{{asset('storage/app/public/celeimages/'.$cele->image4)}}" class="img-fluid">

                      </div>
                      </div>


            </div>

          </div>



        </div>

      </div>
    </section><!-- End Counts Section -->

</main>

@endsection
