<div class="con">
    <div class="on_form">
        <h3>Make a Booking Now</h3>
        <div class="banner_form_one">

            <form method="post" action="{{url('booking')}}">
                @csrf
        <div class="fields">
         <input type="text" name="name" class="form-control" placeholder="Name" {{old('name')}} required/>
        </div><!--END OF-->
         <div class="fields">
         <input type="email" name="email" class="form-control" placeholder="Email" {{old('email')}} required/>
        </div><!--END OF-->
         <div class="fields">
         <input type="text" name="contact" class="form-control" placeholder="Contact#" {{old('contact')}} required/>
        </div><!--END OF-->
        </div><!--END OF banner_form_one-->
        <div class="banner_form_two">

        <div class="fields">
         <select class="form-control" name="adults" required>
             <option>Adults</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
         </select>
        </div><!--END OF-->

         <div class="fields">
          <select class="form-control" name="children" required>
             <option>Children</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
         </select>
        </div><!--END OF-->
         <div class="fields">
         <input type="text" name="interest" class="form-control" placeholder="Interest In" {{old('interest')}} required/>
        </div><!--END OF-->

         <div class="fields">
         <input type="text" name="date" class="form-control" placeholder="Date" id="datepicker" {{old('date')}} required/>
        </div><!--END OF-->
         </div><!--END OF banner_form_two-->

           <div class="banner_form_three">
            <div class="fields">
         <textarea class="form-control" name="message" placeholder="Message / Instructions"  required/>{{old('message')}}</textarea>
        </div><!--END OF-->

        <input type="submit" class="btn" value="Book Now" />

    </form>
           </div><!--END OF banner_form_two-->
    </div><!--END OF ON FORM-->
    </div><!--END OF CON-->