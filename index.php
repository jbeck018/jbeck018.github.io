<!--
Added to CSS:
1. added li to font Styles
2. Due to Javascript function and way the Div's interact with it, each expandable div needed to have it's own style added to it. The display:none overroad the css file and I couldn't think of a way to fix it.(not sure if you could fix that or not)
3. Jon said to do 5% Opacity with the normal blue, however, the opacity function overrides everything in the Div. IT would be possible to do it with clever css, but the easier option was to assign the divs with a bg-color of #f5f8fc
4. For the device section; rather than add new css, I simply overoad the current css to shrink the block around the buttons

What I haven't done:
updated sans to have light version like Jon suggested
Justified all subtext (not sure if this necessary or not)
Note: I left the review section blocked out; Jon has it in is design but we just took it off our current page so I didn't add it back.
-->


<!DOCTYPE html>
<!--This script is used to pull a specific set of divs, and then iterate over them to open or close the blocks-->
<!--NEED TO FIND A WAY TO ALTER WEDGE/VEE/FA ANGLE AFTER CLICK-->
<script type="text/javascript">
//Create a function that will take an input with an id respective to the block that will expand
  function expandBox(input, data){
    //create a var expandable that collects a list of elements with class name accordian.
    var expandable = document.getElementsByClassName('open');
    //Make the list of elements iterable
    for (var x=0; x<expandable.length; x++){
      //create new var name that creates a list of id's from the list of elements
      var name = expandable[x].getAttribute("id");
      //iterate over ids and compare them to 'input'. If the input and block id match then toggle the block (inner if/else). Else, close all other blocks so that no two block are open at the same time. This last else will close any open blocks that don't match the input block.
      if (name == input){
        if (expandable[x].style.display == 'block'){
          expandable[x].style.display = 'none';
        }else{
          expandable[x].style.display = 'block';
        }
      }else{
        if (expandable[x].style.display =='block'){
          expandable[x].style.display = 'none';
        }else{

        }
        //call toggle function to flip angles
      }toggle(data);
    }
  }
//The toggle function works just like the expandbox function, it just identifies the blocks state and manipulates the arrow.
function toggle(input){
  var arrows = document.getElementsByClassName('fa');
  var boxes = document.getElementsByClassName('open');
  for (var i=0; i<arrows.length; i++){
    var ids = arrows[i].id;
    if (ids == input){
      if (boxes[i].style.display == 'block'){
        arrows[i].className = 'fa fa-angle-up fa-lg';
      }else {
        arrows[i].className = 'fa fa-angle-down fa-lg';
      }
    }else {
      arrows[i].className = 'fa fa-angle-down fa-lg';
    }
  }
}

</script>
<script src="https://use.fontawesome.com/17390e10f4.js"></script>


<html>
  <head>
    <meta charset="utf-8">
    <title>Ever Accountable</title>
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/includes/head.php";
      include_once($path);
    ?>
  </head>
  <body>
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/includes/header.php";
      include_once($path);
    ?>

    <div class="content-block bg-yellow1">
      <section>
        <h1>Ever Accountable is a powerful app designed to help you live above pornography.</h1>
        <p class="sm-copy">Ever Accountable is not a filter. It monitors and reports your activity to your spouse, partner, or a trusted friend.</p>
        <div class="center">
          <a href="/individual-plan">
            <button type="button" name="button">For Individuals</button>
          </a>
          <a href="/family-plan">
            <button type="button" name="button">For Families</button>
          </a>
        </div>

        <!--Add Learn More Button for Expandable box -->
        <br></br>
        <div class = "center">
          <a class="accordian" href="#" onclick="expandBox('box1', 'arrow1');return false;"><p>Learn More <i id = "arrow1" class="fa fa-angle-down fa-lg"  ></i></p></a>

        </div>
      </section>
    </div>

    <!-- New Div Section after Click -->
    <div class="content-block" style="background-color: #f5f8fc">
        <section id="box1" class="accordian open" style="display: none; padding-left: 180px; padding-right: 180px">
          <h3 class="center" style="font-size: 30px">Accountability, Not Filters</h3>
          <ul>
            <li>Filters are notoriously inconsistent: They are incapable of blocking 100% of content and cannot recognize nuance or context.</li>
            <li>Filters offer a temporary fix to pornography’s psychological and social damages; accountability provides a tool that is proven to help with the recovery process </li>
            <li>Filters are easy to circumnavigate and merely provide an illusion of safety for partners and parents.</li>
            <li>Accountability is based on freedom, which is foundational to creating the habits that you need to be free of pornography.**</li>
          </ul>
        </section>
    </div>


<!--Added links for app downloads (copyed from download page-->
    <div class="content-block">
      <section class="sec-sm center" style="padding: 40px 25px">
        <div class="clearfix">
          <div class="platform" style="padding-bottom: 25px">
            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.everaccountable.android">
              <img src="/assets/img/platform/android.png" alt="Android">
            </a>
          </div>
          <div class="platform" style="padding-bottom: 25px">
            <a target="_blank" href="https://chrome.google.com/webstore/detail/ever-accountable-for-chro/mhpfiackdifhfjphkicjidjlnibkfgek">
              <img src="/assets/img/platform/chromeos.png" alt="ChromeOS">
            </a>
          </div>
          <div class="platform" style="padding-bottom: 25px">
            <a target="_blank" href="https://www.amazon.com/EverAccountable-com-Ever-Accountable/dp/B008CISZPE/ref=sr_1_2?ie=UTF8&qid=1478709281&sr=8-2&keywords=ever+accountable">
              <img src="/assets/img/platform/amazon.png" alt="Amazon Kindle">
            </a>
          </div>
        </div>
        <div class="clearfix">
          <div class="platform" style="padding-bottom: 25px">
            <a target="_blank" href="https://s3-us-west-2.amazonaws.com/ever-accountable-windows-app/installer/everaccountable.exe">
              <img src="/assets/img/platform/windows.png" alt="Windows">
            </a>
          </div>
          <div class="platform" style="padding-bottom: 25px">
            <a target="_blank" href="https://itunes.apple.com/us/app/sunlight-browser-build-trust-with-accountability/id1074047778?mt=8">
              <img src="/assets/img/platform/ios.svg" alt="iOS">
            </a>
          </div>
          <div class="platform" style="padding-bottom: 25px">
            <a target="_blank" href="https://ever-accountable-windows-app.s3.amazonaws.com/installer/EverAccountable.pkg">
              <img src="/assets/img/platform/macos.svg" alt="macOS">
            </a>
          </div>
        </div>
      </section>
    </div>


    <div class="content-block bg-blue-t">
      <section>
        <h2>Why choose Ever Accountable?</h2>
        <div class="col-3">
          <img class="icon" src="/uploads/img/settings.svg" alt="Gears Icon">
          <h3>Easy to Use</h3>
          <p>Tired of drawn-out, complicated installs? Once you download Ever Accountable, just follow the prompts and you are all set!</p>

          <!--Add New ExpandableBox -->
          <a class="accordian" href="#" onclick="expandBox('box2', 'arrow2');return false;"><p>Learn More <i id = "arrow2" class="fa fa-angle-down fa-lg"></i></p></a>

        </div>

        <div class="col-3">
          <img class="icon" src="/uploads/img/dove.svg" alt="Dove Icon">
          <h3>Freedom From Temptation</h3>
          <p>Ever Accountable lets you use all your favorite apps just like always. Now though, it's with help as you live above pornography!</p>

          <!--Add New ExpandableBox -->
          <a class="accordian" href="#" onclick="expandBox('box3', 'arrow3');return false;"><p>Learn More <i id = "arrow3" class="fa fa-angle-down fa-lg"></i></p></a>

        </div>

        <div class="col-3">
          <img class="icon" src="/uploads/img/file.svg" alt="File Icon">
          <h3>Simple, Accurate Reports</h3>
          <p>Ever Accountable's weekly reports show all the key details in a clear, concise way. There's no guesswork here!</p>

            <!--Add New ExpandableBox -->
            <a class="accordian" href="#" onclick="expandBox('box4','arrow4');return false;"><p>Learn More <i id = "arrow4" class="fa fa-angle-down fa-lg"></i></p></a>

        </div>
      </section>
    </div>

    <!-- New Div Section after Click -->
    <div class="content-block" style="background-color: #f5f8fc">
        <section id="box2" class="accordian open" style="display: none; padding-left: 180px; padding-right: 180px">
          <h3 class="center" style="font-size: 30px">Device Compatibility</h3>
          <ul>
            <li>Ever Accountable works on all of your Android and Windows devices.</li>
            <li>For IOS, we use our proprietary browser, the Sunlight Browser, to monitor your iPhone, iPad, or iPod.</li>
            <li>Due to Apple’s security constraints, we can only report traffic in the Sunlight Browser. Apple does not allow for an external app to monitor all application data on their devices, so please follow our set-up guide for full accountability.</li>
          </ul>
        </section>
        <section id="box3" class="accordian open" style="display: none; padding-left: 180px; padding-right: 180px">
          <h3 class="center" style="font-size: 30px">Effective and Successful</h3>
          <ul>
            <li>Our application is secure and lightweight; it won’t drain your battery</li>
            <li>All of your applications will be monitored, even in those pesky incognito or private modes. For more information about compatibility see our <a href="/download">Device page</a>.</li>
            <li>We provide training to help you and your accountability partner navigate the process to a life without pornography.</li>
          </ul>
        </section>
        <section id="box4" class="accordian open" style="display: none; padding-left: 180px; padding-right: 180px">
          <h3 class="center" style="font-size: 30px">Our Reports</h3>
          <ul>
            <li>Our reports are constantly updated and easy to understand with options to see more details if desired. </li>
            <li>We will tell you immediately about  questionable sites.</li>
            <li>Our reports track all viewed content as well as time spent browsing. </li>
          </ul>
        </section>
    </div>

    <div class="content-block">
      <section class="sec-sm">
        <img src="/uploads/img/screenshots.jpg" alt="Screenshots">
      </section>
    </div>

    <!-- <div class="content-block bg-blue-t">
      <section>
        <h2>Recent Reviews from our Users</h2>
      </section>
    </div> -->

    <div class="content-block bg-yellow2">
      <section>
        <p class="lg-copy">Try Ever Accountable free for 14 days!</p>
        <p class="sm-copy">No credit card required. No pressure.</p>
        <div class="center">
          <button type="button" name="button">Start Your Free Trial</button>
        </div>
      </section>
    </div>

    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/includes/footer.php";
      include_once($path);
    ?>
    <!-- Drip -->
  <script type="text/javascript">
    var _dcq = _dcq || [];
    var _dcs = _dcs || {};
    _dcs.account = '7396844';

    (function() {
      var dc = document.createElement('script');
      dc.type = 'text/javascript'; dc.async = true;
      dc.src = '//tag.getdrip.com/7396844.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(dc, s);
    })();
  </script>
  </body>
</html>
