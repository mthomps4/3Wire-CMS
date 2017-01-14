@extends('layouts.main')
@section('mainContent')

<h1 class="pageTitle">3WireCMS</h1>
<h3 class="pageHeading">HipsterIpsum</h3>
<p><a href="https://hipsum.co/">Need some Filler Text? Check Out Hipster Ipsum Here!</a></p>
<p>Paleo celiac meh godard, hammock gastropub XOXO ramps. Yuccie scenester biodiesel single-origin coffee affogato. XOXO pop-up bitters disrupt, iPhone leggings hexagon keytar before they sold out kogi austin waistcoat aesthetic live-edge. Fanny pack raw denim forage, locavore flexitarian gastropub ugh blue bottle disrupt affogato tbh stumptown raclette neutra retro. Cardigan tousled authentic, coloring book kickstarter activated charcoal distillery franzen craft beer forage knausgaard pinterest. Blue bottle normcore umami vaporware bitters. Bitters VHS pork belly mixtape forage hell of pinterest tousled, polaroid fanny pack roof party craft beer.</p>

<p>Kombucha poke mumblecore, cred gluten-free banjo everyday carry. Plaid DIY stumptown paleo cliche man bun trust fund affogato chia, yuccie intelligentsia food truck direct trade fanny pack ethical. Fam gluten-free air plant drinking vinegar, XOXO tote bag edison bulb normcore neutra hammock. Banh mi fanny pack small batch literally. Pabst gentrify hammock, thundercats etsy scenester letterpress ramps freegan vexillologist brunch schlitz subway tile messenger bag hashtag. Truffaut succulents umami, vexillologist shoreditch pinterest aesthetic street art blog cred. Umami pabst aesthetic ethical wayfarers 90's.</p>

<p>Actually deep v typewriter, plaid before they sold out celiac vice af VHS coloring book tbh. Live-edge put a bird on it kickstarter, narwhal ennui master cleanse bespoke tote bag viral schlitz. Schlitz ugh photo booth crucifix small batch before they sold out whatever deep v. Umami bushwick bitters hashtag woke. Street art raw denim occupy pickled art party enamel pin. Selvage gluten-free wolf artisan ennui etsy. Kickstarter microdosing hella, unicorn health goth cardigan aesthetic intelligentsia.</p>

<p>Hella venmo +1, tote bag vape single-origin coffee umami stumptown literally marfa pickled vinyl tumblr. Polaroid yr lumbersexual cardigan mlkshk crucifix truffaut intelligentsia chia. Copper mug knausgaard kale chips deep v glossier kinfolk master cleanse, pinterest sustainable you probably haven't heard of them vaporware leggings four dollar toast pork belly street art. Twee yr meh, small batch scenester shoreditch hell of 8-bit raclette readymade mumblecore. Godard tousled tattooed austin, ennui actually church-key thundercats blog everyday carry mlkshk banh mi. Echo park biodiesel whatever meh, messenger bag affogato cred. Ramps helvetica try-hard authentic, sriracha pug franzen gentrify deep v umami asymmetrical godard.</p>

<p>Vegan cronut pop-up PBR&B bitters, lumbersexual artisan pour-over portland authentic. Roof party gluten-free wolf cronut pitchfork cliche, kickstarter literally iPhone yr lumbersexual kinfolk. Gluten-free hella put a bird on it vaporware. Knausgaard godard helvetica, subway tile chicharrones mlkshk freegan asymmetrical pitchfork craft beer pork belly everyday carry iPhone retro wayfarers. Air plant pop-up succulents, umami bitters actually raclette selfies jean shorts poutine. Beard glossier mixtape twee hammock, tumblr distillery pour-over synth. Food truck chicharrones aesthetic pug ugh, tumeric bespoke authentic pork belly man bun vaporware.</p>

<p>Pop-up selfies freegan tousled, tofu XOXO tilde subway tile lo-fi meditation synth meggings af hashtag lumbersexual. Poke umami master cleanse cold-pressed. Schlitz you probably haven't heard of them locavore bitters. Gochujang chambray iceland cornhole chartreuse occupy. Chicharrones retro try-hard kombucha wayfarers tattooed cronut, twee normcore microdosing shoreditch green juice unicorn. Blue bottle tattooed hoodie salvia, pork belly vice XOXO tote bag stumptown tumblr polaroid mlkshk subway tile quinoa drinking vinegar. Beard try-hard migas organic poutine, wolf chicharrones hoodie hashtag vinyl cray everyday carry microdosing.</p>

@stop


@section('sidebar')
  <div class="Bio">
    <img src="https://s-media-cache-ak0.pinimg.com/236x/8c/9b/31/8c9b310335e1e9cb4e4329ecc0eef472.jpg" alt="Harley Profile Pic" width=100%;>
    <h4 class="BioName">User Name</h4>
    <p>
      <b>Bio:</b>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>
      <b>Github:</b>
      <a href="https://github.com/mthomps4/3WireCMS">3WireCMS</a>
    </p>
    <p>
      <b>Contact:</b>
      <form class="" action="" method="">
        <div class="form-group">
        <label for="Name">Name:</label>
        <input type="text" name="Name" value="" class="form-control" >
        </div>

        <div class="form-group">
        <label for="Email">Email</label>
        <input type="Email" name="Email" value="" class="form-control" >
        </div>

        <div class="form-group">
        <label for="Feedback">Feedback:</label>
        <textarea name="Feedback" placeholder="Drop us a Line" class="form-control" ></textarea>
        </div>
      </form>
    </p>
  </div>
@stop

<!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
selector: 'textarea',
height: 300,
menubar: false,
plugins: [
'advlist autolink lists link image charmap print preview anchor',
'searchreplace visualblocks code fullscreen',
'insertdatetime media table contextmenu paste code'
],
toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
content_css: '//www.tinymce.com/css/codepen.min.css'
});
</script>
<textarea>Easy! You should check out MoxieManager!</textarea> -->
