@extends('backend.company')
@section('body')
<div class="app-content content">
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
               <div class="col-12">
                  <h2 class="content-header-title float-left mb-0">Company</h2>
                  <div class="breadcrumb-wrapper col-12">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('redirect_user') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Survey
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="content-body">
         <!-- Column selectors with Export Options and print table -->
         <section id="column-selectors">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Survey Form</h4>
                     </div>
                     <div class="card-content">
                        <div class="card-body card-dashboard">
                           
                           <div class="row">
                              <div class="col-12">
                                  <div class="card">
                                      <div class="card-header">
                                          <h4 class="card-title">Comments/ Feedback/ Suggestions:</h4>
                                          <div class="col-md-4">
                                             <div class="kt-separator kt-separator--dashed">
                                                <div class="btn-group btn-group" role="group" aria-label="...">
                                                   <button type="button" class="btn btn-dark comment-value" value="Holly smokes, that was the best massage I ever had!">name</button>
                                                   <button type="button" class="btn btn-dark comment-value" value="My body feels great, thanks.">name</button>
                                                   <button type="button" class="btn btn-dark comment-value" value="Wow, we should do this more often.">name</button>
                                                   <button type="button" class="btn btn-dark comment-value" value="I wish my session were longer.">name</button>
                                                </div>
                                             </div>
														</div>   
                                      </div>
                                      <div class="card-content">
                                          <div class="card-body">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <fieldset class="form-label-group">
                                                          <textarea class="form-control" id="textarea" rows="3" 
                                                          value="" placeholder="Dearest Manager, I am penning you this letter today – whilst adorning a tophat – to inform you that my experience was truly…"></textarea>
                                                          <label for="label-textarea">Your Comments</label>
                                                          <input type="text" name="department_name" id="department_name" value="{{$department}}" hidden/>
                                                      </fieldset>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h1>Pain / Stress Level Before?</h1>
                                 <div class="emoji-rating" id="myRating">
                                    <span class="emoji-rating1 custom-btn" onClick="painStressLevelBefore(1)">😡</span>
                                    <span class="emoji-rating2 custom-btn" onClick="painStressLevelBefore(2)">😣</span>
                                    <span class="emoji-rating5 custom-btn" onClick="painStressLevelBefore(3)">😐</span>
                                    <span class="emoji-rating7 custom-btn" onClick="painStressLevelBefore(4)">😊</span>
                                    <span class="emoji-rating10 custom-btn" onClick="painStressLevelBefore(5)">🤗</span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h1>Pain / Stress Level After?</h1>
                                 <div class="pain-after-rating" id="painRating">
                                    <span class="pain-after-rating1 custom-btn" onClick="painStressLevelAfter(1)">😡</span>
                                    <span class="pain-after-rating2 custom-btn" onClick="painStressLevelAfter(2)">😣</span>
                                    <span class="pain-after-rating5 custom-btn" onClick="painStressLevelAfter(3)">😐</span>
                                    <span class="pain-after-rating7 custom-btn" onClick="painStressLevelAfter(4)">😊</span>
                                    <span class="pain-after-rating10 custom-btn" onClick="painStressLevelAfter(5)">🤗</span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h1>Mood / Morale Before?</h1>
                                 <div class="mood-before-rating" id="moodBefore">
                                    <span class="mood-before-rating1 custom-btn" onClick="moodMoraleLevelBefore(1)">😡</span>
                                    <span class="mood-before-rating2 custom-btn" onClick="moodMoraleLevelBefore(2)">😣</span>
                                    <span class="mood-before-rating5 custom-btn" onClick="moodMoraleLevelBefore(3)">😐</span>
                                    <span class="mood-before-rating7 custom-btn" onClick="moodMoraleLevelBefore(4)">😊</span>
                                    <span class="mood-before-rating10 custom-btn" onClick="moodMoraleLevelBefore(5)">🤗</span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h1>Mood / Morale After?</h1>
                                 <div class="mood-after-rating" id="moodAfter">
                                    <span class="mood-after-rating1 custom-btn" onClick="moodMoraleLevelAfter(1)">😡</span>
                                    <span class="mood-after-rating2 custom-btn" onClick="moodMoraleLevelAfter(2)">😣</span>
                                    <span class="mood-after-rating5 custom-btn" onClick="moodMoraleLevelAfter(3)">😐</span>
                                    <span class="mood-after-rating7 custom-btn" onClick="moodMoraleLevelAfter(4)">😊</span>
                                    <span class="mood-after-rating10 custom-btn" onClick="moodMoraleLevelAfter(5)">🤗</span>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="row">
                              <div class="col-md-12">
                                 <h1> Would a continuous wellness culture increase the value of your employer?</h1>
                                 <div>
                                    <div class="card-content">
                                       <div class="card-body">
                                           <ul class="list-unstyled mb-0">
                                             <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-danger">
                                                        <input type="radio" onChange="continuousWellness(1)" name="radiocolor" checked value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="span_radio_size">Strongly Disagree</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                             <fieldset>
                                                 <div class="vs-radio-con vs-radio-danger">
                                                     <input type="radio" onChange="continuousWellness(2)" name="radiocolor" checked value="false">
                                                     <span class="vs-radio">
                                                         <span class="vs-radio--border"></span>
                                                         <span class="vs-radio--circle"></span>
                                                     </span>
                                                     <span class="span_radio_size">Disagree</span>
                                                 </div>
                                             </fieldset>
                                         </li>
                                               <li class="d-inline-block mr-2">
                                                   <fieldset>
                                                       <div class="vs-radio-con vs-radio-warning">
                                                           <input type="radio" onChange="continuousWellness(3)" name="radiocolor" value="false">
                                                           <span class="vs-radio">
                                                               <span class="vs-radio--border"></span>
                                                               <span class="vs-radio--circle"></span>
                                                           </span>
                                                           <span class="span_radio_size">Neutral</span>
                                                       </div>
                                                   </fieldset>
                                               </li>
                                               <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-info">
                                                        <input type="radio" onChange="continuousWellness(4)" name="radiocolor" value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="span_radio_size">Agree</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                             <fieldset>
                                                 <div class="vs-radio-con vs-radio-success">
                                                     <input type="radio" onChange="continuousWellness(5)" name="radiocolor" value="false">
                                                     <span class="vs-radio">
                                                         <span class="vs-radio--border"></span>
                                                         <span class="vs-radio--circle"></span>
                                                     </span>
                                                     <span class="span_radio_size">Strongly Agree</span>
                                                 </div>
                                             </fieldset>
                                         </li>
                                           </ul>
                                       </div>
                                   </div>
                                 </div>
                              </div>
                           </div>
                           <br>
                          <div class="row">
                             <div class="col-md-12">
                              <button type="button" class="btn bg-gradient-dark mr-1 mb-1" onclick="saveReview()">Submit Survey</button>
                             </div>
                          </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Column selectors with Export Options and print table -->
      </div>
   </div>
</div>
<script>
//Get value from button for Comments Start
$(".comment-value").click(function() {
   // console.log($(this).val());
   $("#textarea").val($(this ).val());
});
//Get value from button for Comments End
var department_name = "";
var painStressLevelBeforeValue = "";
var painStressLevelAfterValue  = "";
var moodMoraleLevelBeforeValue = "";
var moodMoraleLevelAfterValue  = "";
var continuousWellnessValue    = "";

function department_name(value) {
   window.department_nameValue = value;
}

function painStressLevelBefore(value) {
   window.painStressLevelBeforeValue = value;
}

function painStressLevelAfter(value) {
   window.painStressLevelAfterValue = value;
}

function moodMoraleLevelBefore(value) {
   window.moodMoraleLevelBeforeValue = value;
}

function moodMoraleLevelAfter(value) {
   window.moodMoraleLevelAfterValue = value;
}

function continuousWellness(value) {
   window.continuousWellnessValue = value;
}

function saveReview() {
   $.ajax({
      type: "GET",
      url: "/review/save",
      data: {
         department_name : window.department_nameValue,
         painStressLevelBefore : window.painStressLevelBeforeValue,
         painStressLevelAfter  : window.painStressLevelAfterValue,
         moodMoraleLevelBefore : window.moodMoraleLevelBeforeValue,
         moodMoraleLevelAfter  : window.moodMoraleLevelAfterValue,
         continuousWellness    : window.continuousWellnessValue,
      },
      success: function (response) {
         // return console.log(response); 
         Swal.fire(
            'Congrats!',
            'Your review has been submitted!',
            'success',
            )
            .then(function(){
               location.reload();
            });
      },
      error: function(error){
         Swal.fire(
            'Warning!',
            'Please fill out the form!',
            'error',
            )
      }
   });
}



$(document).ready(function (){
   
   

   

});
   
   var header = document.getElementById("myRating");
var btns = header.getElementsByClassName("custom-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("activeEmoji");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" activeEmoji", "");
  }
  this.className += " activeEmoji";
  });
}
$("span").click(function(){
   $(this).addClass('activeEmoji');
   console.log(this);
   });
//Pain

var header = document.getElementById("painRating");
var btns = header.getElementsByClassName("custom-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("pain-after-activeEmoji");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" pain-after-activeEmoji", "");
  }
  this.className += " pain-after-activeEmoji";
  });
}



//Mood before

var header = document.getElementById("moodBefore");
var btns = header.getElementsByClassName("custom-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("mood-before-activeEmoji");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" mood-before-activeEmoji", "");
  }
  this.className += " mood-before-activeEmoji";
  });
}

//Mood After
var header = document.getElementById("moodAfter");
var btns = header.getElementsByClassName("custom-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("mood-after-activeEmoji");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" mood-after-activeEmoji", "");
  }
  this.className += " mood-after-activeEmoji";
  });
}

</script>
@endsection