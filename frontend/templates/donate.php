<?php
include "libs/load.php";
?>
<head>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="vendor/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <script src="js/home.js"></script>
    <link rel="stylesheet" href="../frontend/css/donate.css">

    
</head>
  <body>
    <?php load_temp("header1.php"); ?>
          <div class="container test" >
                <div class="row">
                   
                  <div class="col bkt">
                      <!-- <h1>Donate to Green Madurai</h1> -->
                        <section class="donation-form" >
                          <h2 style="">DONATION</h2>
                          <form>
                            <label for="categories" class="form-label" ">You are helping</label>
                            <select id="categories" name="categories" class="form-select" required>
                              <option value="" disabled selected></option>
                              <option value="Trees">Trees</option>
                              <option value="DamCleaning">Dam Cleaning</option>
                              <option value="PublicPlace">Public Places</option>
                              <option value="Others">Others</option>
                              <!-- Add more currency options as needed -->
                            </select>
                            <label for="name" class="form-label" >Your Name</label>
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <select id="categories" name="categories" class="form-select" required>
                                <option value="" disabled selected></option>
                                <option value="mr">Mr.</option>
                                <option value="mrs">Mrs.</option>
                                <!-- Add more currency options as needed -->
                              </select>
                              </div>
                              <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <label for="amount" class="form-label" >Amount</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text ">Rs.</span>
                              </div>
                              <input type="number" id="amount" name="amount" step="5.0" class="form-control" required>
                              <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                              </div>
                            </div>
                            <a href="cashpay.php" class="btn donate" >Donate Now
                            </a>
                          </form>  
                        </section>
                  </div> 
                </div>
                <div class="row">
                    
                      
                        <div class=" containe">
                            <div class="colum">
                                <h2>Number of Contributors</h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" width="100" height="100" fill="#ffbf69ff" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 5000000 6250000" x="0px" y="0px"><g><path  d="M528914 2065695l285246 -301663c169139,77837 296820,178706 404304,287962 -2481,1417 -4961,2834 -7087,4252 -2953,1653 -5670,3661 -8386,5787l-15828 12166c-33544,25749 -138193,142209 -212132,245323 -41931,58348 -75711,116815 -87405,163233 -117405,-113271 -239417,-248393 -358712,-417060zm1578357 913966c41576,31772 86341,120594 127799,151186 1182,826 2481,1417 3898,1889 1772,591 17717,6024 28820,7205 35198,3544 82562,-4842 137248,-14646 77956,-13819 166305,-29528 242961,-14646 110791,21615 268709,23859 377610,-18662 29647,-11339 53388,-13465 70042,-5787 11221,5078 19488,15000 24685,29410 11339,31418 -826,96263 -81380,136540 -42049,20906 -112090,47127 -166777,55041 -188982,27638 -126382,208943 -40395,322569 591,1417 1299,2717 2244,3662l194770 191698c1063,1300 2481,2363 4016,3308 28229,28347 46773,57403 34607,101460 -3661,13465 -10984,22914 -22323,28819 -38151,20080 -77365,15001 -108547,-7795l-162525 -119059 -236 -118c-6614,-4252 -15355,-2362 -19607,4134 -4252,6496 -2362,15355 4252,19607l116933 87522c2835,2599 70042,62010 26458,117524 -28820,36733 -57049,34725 -65081,28701 -13819,-10039 -201030,-133350 -209416,-139020 -6496,-4370 -15119,-2598 -19607,3898 -4252,6378 -2599,15237 3898,19607l0 0 0 0 167603 115161c4371,6732 17954,31654 -1063,56222 -19252,25040 -45828,13229 -47363,12638l-245441 -160398c-6615,-4252 -15355,-2363 -19607,4252 -4134,6496 -2244,15236 4252,19489l189927 124964c-2244,7205 -30946,17717 -42993,14882 -68979,10276 -346428,-226188 -384107,-275559 -5787,-7678 -10394,-13702 -13465,-17599 -10276,-12639 -59293,-145162 -125201,-236701 -47245,-65435 -90593,-125673 -105239,-145398 -14646,-19843 -37915,-39686 -39804,-41222 0,0 -119,0 -119,0l-170202 -187565c-64254,-70632 -182132,-158863 -260205,-219219 -42403,-32718 -85396,-65908 -131461,-104059l139493 -141618c46301,-33899 102641,-62837 152721,-70160 4843,-709 9449,-1299 14056,-1535 4488,354 8504,1063 12284,2126 5905,1889 11220,5433 15354,10866 7442,9804 13229,25513 16536,48427 4134,28820 12757,61301 23151,92601 11693,35789 26103,70278 38859,95791 24214,48662 56104,80317 88231,99451 32600,19371 66735,26458 96027,25395 14410,1063 27639,-591 38623,-4016 1181,-236 2363,-590 3426,-945 48899,-19489 77719,-30355 81380,-110318zm828097 62718c12402,-13465 23505,-26812 32954,-39450 36733,-49844 73585,-99806 110318,-149650 827,-1181 1536,-2481 2008,-3898 591,-1772 5906,-17717 7087,-28820 3662,-35316 -4843,-82561 -14528,-137248 -13819,-77955 -29528,-166305 -14646,-242961 21497,-110790 23741,-268709 -18662,-377610 -11339,-29646 -13465,-53387 -5906,-70041 5197,-11221 15001,-19489 29411,-24686 31418,-11339 96262,708 136539,81380 21025,42049 47128,112090 55041,166777 27639,188982 209062,126382 322688,40395 1299,-590 2598,-1299 3661,-2244l191581 -194770c1417,-1063 2481,-2480 3307,-4016 28466,-28229 57404,-46773 101578,-34607 13347,3661 22796,10984 28702,22323 20197,38151 15000,77365 -7796,108429l-118940 162643 -118 236c-4371,6614 -2481,15355 4134,19489 6496,4252 15236,2480 19488,-4134l87641 -116933c2480,-2835 62010,-70041 117523,-26457 36616,28819 34726,57049 28702,65080 -10158,13820 -133469,201030 -139020,209416 -4370,6379 -2717,15119 3780,19607 6496,4252 15236,2599 19606,-3897l0 0 0 0 115280 -167604c6732,-4370 31654,-17953 56222,1063 24922,19134 13229,45828 12638,47364l-160517 245440c-4134,6615 -2244,15355 4252,19607 6615,4134 15355,2244 19607,-4252l124847 -189927c7323,2244 17717,30828 14882,42993 10276,68979 -226070,346311 -275560,383989 -7559,5787 -13583,10394 -17481,13583 -12638,10276 -145162,59293 -236700,125201 -65435,47245 -125791,90593 -145398,105239 -19843,14646 -39687,37915 -41222,39805 0,0 0,118 -118,118l-187447 170202c-70632,64254 -158863,182132 -219220,260205 -16063,20788 -32127,41694 -48899,62955l-46418 -45592 -591 -827c-32363,-42757 -60474,-95554 -67207,-141028 -1890,-13347 -1772,-25158 1063,-34489 1890,-5906 5315,-11221 10867,-15355 9803,-7441 25512,-13111 48308,-16536 28820,-4134 61301,-12756 92602,-23032 35788,-11812 70277,-26222 95790,-38860 48663,-24331 80317,-56104 99452,-88349 29647,-49608 30355,-102759 17953,-137367 -4842,-13583 -11221,-25512 -18898,-35670l-3780 -4843c-10984,-13110 -24331,-23268 -39922,-30473 -19725,-8977 -42049,-12402 -66380,-10394 -18190,1535 -37679,6142 -58230,13937l-1890 709c-19371,7559 -40986,13465 -64018,17835zm34726 -1045899l-101342 -74884c-1181,-827 -2481,-1536 -3898,-1890 -1772,-709 -17717,-6024 -28938,-7205 -35198,-3543 -82443,4843 -137248,14528 -77837,13938 -166187,29647 -242843,14764 -110791,-21614 -268709,-23859 -377610,18662 -29647,11339 -53387,13465 -70042,5788 -11220,-5079 -19488,-15000 -24685,-29410 -11339,-31419 708,-96263 81380,-136540 42049,-20906 112090,-47128 166777,-55041 188982,-27639 126382,-208944 40395,-322688 -591,-1299 -1299,-2598 -2244,-3661l-194770 -191581c-1063,-1299 -2480,-2480 -4016,-3307 -28229,-28466 -46773,-57403 -34607,-101460 3661,-13465 10984,-22914 22323,-28820 38151,-20197 77365,-15000 108429,7796l162643 119059 236 118c6614,4252 15355,2362 19489,-4134 4252,-6615 2480,-15355 -4134,-19607l-116933 -87523c-2835,-2598 -70042,-62009 -26458,-117523 28820,-36733 57050,-34725 65081,-28702 13820,10040 201030,133351 209298,139020 6496,4253 15237,2599 19607,-3897 4370,-6497 2717,-15237 -3780,-19607l0 0 0 0 -167603 -115161c-4370,-6733 -17954,-31655 945,-56341 19252,-24922 45946,-13110 47481,-12520l245441 160399c6615,4252 15237,2244 19607,-4252 4134,-6615 2244,-15237 -4252,-19489l-189927 -124964c2244,-7205 30828,-17718 42993,-14883 68861,-10276 346310,226188 383989,275560 5787,7677 10394,13701 13583,17481 10276,12756 59293,145162 125201,236700 47127,65553 90593,125792 105239,145517 14646,19843 37915,39686 39805,41103 0,118 118,118 118,118l170202 187565c64254,70633 182132,158864 260205,219102 27166,21024 54569,42166 82916,64726l-125437 127445 -1654 1181c-44056,33308 -98625,62364 -146225,69333 -15000,2244 -28465,2008 -39568,-1417 -8150,-2481 -15473,-7323 -21260,-15001 -8623,-11339 -15119,-28701 -18780,-53623 -4016,-28230 -12402,-60002 -22560,-90712 -11575,-35198 -25749,-69097 -38269,-94255 -23150,-46419 -53388,-76420 -83861,-94609 -46301,-27639 -95554,-28466 -127563,-16890 -14410,5078 -26694,12047 -36852,20670 -11457,9567 -20315,21024 -26575,34134l-945 1890c-4134,8977 -6969,18662 -8504,28938zm-916092 45002l-68270 92483c-945,1181 -1536,2480 -2008,3898 -591,1771 -6024,17717 -7087,28938 -3661,35197 4725,82443 14528,137248 13819,77955 29529,166186 14646,242842 -21615,110791 -23859,268828 18662,377611 11339,29646 13465,53387 5788,70041 -5079,11221 -15001,19607 -29292,24686 -31537,11339 -96381,-709 -136658,-81381 -20906,-41930 -47010,-112090 -55041,-166658 -27639,-189101 -208944,-126500 -322570,-40513 -1417,590 -2598,1417 -3661,2362l-191699 194652c-1299,1181 -2362,2598 -3307,4134 -28348,28111 -57286,46655 -101460,34607 -13465,-3662 -22914,-10985 -28820,-22442 -20079,-38032 -15000,-77246 7796,-108428l119058 -162525 119 -354c4252,-6497 2362,-15237 -4134,-19489 -6497,-4252 -15355,-2362 -19607,4134l-87523 116933c-2598,2834 -62010,70041 -117523,26575 -36734,-28938 -34726,-57167 -28702,-65199 10158,-13701 133469,-201030 139020,-209298 4370,-6496 2599,-15118 -3898,-19607 -6378,-4370 -15236,-2598 -19606,3780l0 0 0 0 -115162 167722c-6732,4252 -31654,17835 -56222,-1063 -25040,-19253 -13229,-45946 -12638,-47364l160399 -245559c4252,-6614 2362,-15236 -4252,-19488 -6497,-4253 -15237,-2363 -19489,4134l-124965 190045c-7205,-2362 -17717,-30946 -14882,-42994 -10158,-68978 226188,-346428 275560,-384106 7677,-5788 13701,-10394 17599,-13583 12638,-10276 145162,-59175 236700,-125201 65435,-47128 125673,-90594 145398,-105240 19844,-14646 39687,-37796 41222,-39804 0,0 0,0 0,0l187565 -170202c70632,-64372 158863,-182250 219220,-260323 12283,-15946 24567,-31891 37324,-48191l97326 95909 708 945c32363,42757 60475,95436 67207,141028 1890,13228 1772,25158 -1063,34371 -1890,6024 -5315,11339 -10866,15473 -9804,7441 -25513,13110 -48427,16536 -28702,4134 -61301,12756 -92602,23032 -35670,11811 -70277,26221 -95790,38859 -48545,24332 -80199,56104 -99452,88350 -29528,49607 -30355,102759 -17835,137366 4843,13583 11221,25631 19016,35907l3662 4606c10984,13111 24331,23269 39922,30356 19725,9094 42049,12520 66380,10512 3189,-237 6379,-591 9686,-1063zm923415 -1541506l301545 285246c-81617,177407 -188628,309340 -304144,420131l-4961 -10985c-8386,-18780 -15000,-33308 -21615,-44411 -2126,-3897 -4724,-7677 -7677,-11338 -4134,-4961 -8032,-10394 -12048,-15592 -25748,-33544 -142091,-138075 -245204,-212014 -37442,-26812 -74766,-50317 -109019,-66853 110436,-112916 241306,-229849 403123,-344184zm1493669 2406572l-285246 301663c-157564,-72522 -279103,-165005 -381980,-265638 18426,-8268 32481,-14764 42639,-21142 2599,-1536 5197,-3308 7559,-5197l16064 -12402c32954,-25159 136303,-140438 209770,-242843 32482,-45237 60002,-90239 75711,-128980 103941,104295 210716,226542 315483,374539zm-2390863 1593594l-301663 -285364c85160,-185084 197959,-320561 319144,-434305 14528,29175 26812,56695 36261,77601 8386,18662 14882,33190 21615,44293 2126,4016 4724,7796 7677,11457l11930 15355c25276,33308 142091,138193 245322,212251 15473,11102 30946,21615 46065,31300 -106893,107720 -232685,218629 -386351,327412z"/></g></svg>
                                <p class="numbe">5000</p>
                            </div>
                            <div class="colum">
                                <h2>Amount of Contributions</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 48 60" stroke-width="0.7" stroke="#04471cff" width="100" height="100" fill="#058c42ff" x="0px" y="0px"><title>cash</title><path d="M23.71,10.53,21.66,9l3-1.47,5-2.4a2,2,0,0,1,1.57,0l5,2.4,6.52,3.16,5,2.41c.43.21.43.55,0,.76l-5,2.41L36,19.55,34,18l6.51-3.15a1.93,1.93,0,0,1,0-2.75L33.28,8.65a14.67,14.67,0,0,1-5.68,0Zm1.18,11.9L20.4,24.61a14.67,14.67,0,0,0-5.68,0L7.53,21.12a1.93,1.93,0,0,0,0-2.75l7.12-3.45-2-1.5L5.29,17l-5,2.41c-.43.21-.43.55,0,.76l5,2.41,6.52,3.16,5,2.4a2,2,0,0,0,1.57,0l5-2.4L26.93,24v0Zm17.82-1.22,5-2.41c.43-.2.43-.55,0-.75l-2-1L36,21.75l-.09,2.77ZM19.23,29.86a3.82,3.82,0,0,1-1.67.36,3.92,3.92,0,0,1-1.66-.35L2.35,23.3l-2,1c-.43.21-.43.56,0,.76l5,2.41,6.52,3.16,5,2.4a2,2,0,0,0,1.57,0l5-2.4,3.63-1.76V26.13Zm0,4.92a4,4,0,0,1-3.33,0L2.35,28.21l-2,1c-.43.2-.43.55,0,.76l5,2.4,6.52,3.17,5,2.39a2,2,0,0,0,1.57,0l5-2.39L27,33.76V31Zm23.48-8.66,5-2.41c.43-.2.43-.55,0-.75l-2-1-9.84,4.76-.09,2.77Zm0,4.92,5-2.41c.43-.21.43-.55,0-.76l-2-1-10,4.84-.09,2.77ZM19.23,39.69a4,4,0,0,1-3.33,0L2.35,33.13l-2,1c-.43.21-.43.55,0,.76l5,2.41,6.52,3.16,5,2.4a2,2,0,0,0,1.57,0l5-2.4L27,38.67V36ZM34,20.53,19.65,10l-5,2.44,14.32,10.5L29,37.7l4.57-2.22Z"/></svg>
                                <p class="numbe">1200</p>
                            </div>
                            <div class="colum">
                                <h2>Green Madurai Percent</h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" stroke-width="0.7" stroke="#04471cff" width="100" height="100" fill="#16db65ff" viewBox="0 0 24 30" style="enable-background:new 0 0 24 24;" xml:space="preserve"><g><path d="M22.211,21.603H19.43c-0.728-0.65-1.193-1.574-1.193-2.59V16.77c-0.099-0.064-0.197-0.126-0.308-0.213   c-0.038-0.037-0.076-0.071-0.119-0.065c-0.027,0.006-0.266,0.079-0.56,0.898c-0.037,0.104-0.136,0.173-0.246,0.173   c-0.11,0-0.208-0.069-0.246-0.173c-0.293-0.82-0.533-0.892-0.559-0.898c-0.041-0.012-0.081,0.028-0.085,0.033   c-0.134,0.109-0.241,0.186-0.342,0.252v2.238c0,1.016-0.463,1.94-1.189,2.59h-0.863c0.922-0.517,1.529-1.5,1.529-2.59v-1.931   c-0.58,0.321-0.935,0.458-0.952,0.465c-0.03,0.01-0.06,0.015-0.089,0.015c-0.101,0-0.196-0.059-0.239-0.156   c-0.055-0.125-0.004-0.273,0.118-0.336c0.239-0.124,0.335-0.273,0.369-0.401c-2.177,0.853-4.705,0.519-4.817,0.505   c-0.109-0.015-0.196-0.097-0.22-0.204c-0.023-0.108,0.024-0.218,0.117-0.276c1.631-1.023,2.752-2.353,3.257-3.026l-1.147,0.067   c-0.398,0.478-0.986,0.794-1.652,0.808c-0.376,0.86-1.196,1.429-2.127,1.525v2.797c0,1.155,0.649,2.198,1.633,2.738H8.625   c-0.779-0.68-1.277-1.661-1.277-2.738v-2.778c-0.482-0.046-0.927-0.211-1.303-0.502c-0.374,0.286-0.826,0.454-1.303,0.501v2.779   c0,1.077-0.5,2.058-1.283,2.738H1.084c-0.144,0-0.261,0.117-0.261,0.261c0,0.144,0.117,0.261,0.261,0.261h21.127   c0.144,0,0.261-0.117,0.261-0.261C22.472,21.72,22.356,21.603,22.211,21.603z"/><path d="M0.979,11.084c-0.353,0.315-0.547,0.755-0.547,1.239c0,0.936,0.761,1.698,1.697,1.698H2.26c0.111,0,0.21,0.069,0.246,0.174   c0.293,0.831,1.086,1.39,1.974,1.39c0.523,0,1.015-0.189,1.388-0.532c0.1-0.092,0.254-0.092,0.354,0   C6.6,15.4,7.079,15.585,7.609,15.585c0.881,0,1.67-0.559,1.964-1.39c0.037-0.105,0.136-0.174,0.246-0.174h0.132   c0.926,0,1.678-0.746,1.694-1.669c0.001-0.005,0.001-0.009,0.001-0.014c0-0.005,0.002-0.01,0.002-0.015   c0-0.569-0.279-1.092-0.747-1.401c-0.012-0.008-0.012-0.024-0.023-0.034c-0.026-0.023-0.039-0.048-0.054-0.08   c-0.015-0.031-0.026-0.057-0.028-0.092c-0.001-0.014-0.013-0.024-0.012-0.039c0.038-0.39-0.094-0.768-0.362-1.037   c-0.19-0.19-0.44-0.315-0.706-0.354C9.685,9.284,9.667,9.257,9.64,9.243C9.616,9.23,9.586,9.233,9.566,9.212   C9.561,9.207,9.563,9.2,9.559,9.195C9.537,9.17,9.534,9.137,9.524,9.104c-0.01-0.033-0.027-0.06-0.024-0.094   C9.5,9.004,9.494,9,9.495,8.993C9.5,8.962,9.526,8.943,9.54,8.916c0.013-0.024,0.011-0.054,0.032-0.074   c0.33-0.32,0.511-0.75,0.511-1.212c0-0.672-0.403-1.283-1.025-1.556C8.963,6.034,8.902,5.94,8.902,5.836   c0-0.036,0.003-0.071,0.007-0.108C8.913,5,8.511,4.389,7.888,4.118c-0.095-0.042-0.156-0.136-0.156-0.24V3.725   c0-0.936-0.756-1.698-1.686-1.698c-0.936,0-1.698,0.762-1.698,1.698c0,0.029-0.002,0.064,0.006,0.101   c0.024,0.121-0.039,0.243-0.153,0.292c-0.628,0.27-1.034,0.88-1.034,1.554C3.174,5.765,3.177,5.8,3.177,5.836   c0,0.104-0.061,0.198-0.156,0.239C2.399,6.348,1.996,6.958,1.996,7.63c0,0.166,0.022,0.319,0.063,0.442   C2.07,8.104,2.054,8.133,2.053,8.165C2.051,8.2,2.06,8.234,2.046,8.265c-0.014,0.031-0.047,0.046-0.073,0.07   C1.95,8.356,1.937,8.387,1.906,8.399C1.25,8.654,0.825,9.275,0.825,9.982c0,0.271,0.07,0.534,0.207,0.78   c0.013,0.023,0.003,0.048,0.009,0.073c0.008,0.034,0.017,0.062,0.011,0.096c-0.006,0.034-0.024,0.057-0.042,0.086   C0.998,11.039,0.999,11.067,0.979,11.084z M7.935,13.62c2.047-1.094,1.293-3.109,1.261-3.193c-0.053-0.135,0.014-0.286,0.149-0.338   c0.134-0.048,0.286,0.015,0.337,0.149c0.01,0.025,0.949,2.534-1.5,3.844c-0.039,0.02-0.082,0.031-0.123,0.031   c-0.093,0-0.183-0.05-0.23-0.138C7.76,13.846,7.808,13.688,7.935,13.62z"/><path d="M20.47,13.515c-0.052-0.083-0.053-0.188-0.003-0.272c0.049-0.084,0.132-0.127,0.24-0.127l2.235,0.135   c-2.245-1.319-3.588-3.15-3.653-3.239c-0.058-0.08-0.065-0.185-0.021-0.271c0.044-0.088,0.135-0.143,0.232-0.143h2.227   l-3.161-2.509c-0.083-0.066-0.118-0.176-0.089-0.277c0.03-0.102,0.118-0.176,0.223-0.188l1.693-0.178   c-1.577-1.22-2.516-2.802-2.56-2.875c-0.054-0.093-0.046-0.209,0.02-0.294c0.067-0.085,0.179-0.121,0.28-0.089l0.387,0.114   l-1.516-1.426l-1.516,1.427l0.387-0.115c0.101-0.035,0.213,0.004,0.28,0.089c0.066,0.085,0.074,0.201,0.02,0.294   c-0.044,0.073-0.983,1.655-2.56,2.875l1.693,0.178c0.105,0.011,0.194,0.086,0.223,0.188c0.03,0.101-0.006,0.211-0.089,0.277   l-3.161,2.509h2.227c0.098,0,0.188,0.055,0.232,0.143c0.045,0.087,0.036,0.192-0.021,0.271c-0.039,0.055-0.97,1.32-2.572,2.51   c-0.021,0.235-0.07,0.462-0.159,0.67l1.314-0.076c0.095-0.003,0.19,0.043,0.24,0.128c0.049,0.084,0.048,0.189-0.004,0.271   c-0.049,0.079-1.125,1.774-3.098,3.198c0.961,0.046,2.696,0,4.136-0.662c0.065-0.029,0.139-0.03,0.203-0.006   c0.066,0.027,0.119,0.077,0.146,0.143c0.046,0.108,0.079,0.267,0.065,0.445c0.118-0.065,0.247-0.14,0.385-0.222   c0.119-0.07,0.245-0.157,0.38-0.264h-0.001c-0.006,0,0.206-0.23,0.531-0.169c0.267,0.047,0.503,0.267,0.716,0.667   c0.213-0.4,0.45-0.62,0.717-0.667c0.336-0.065,0.546,0.179,0.569,0.207c0.097,0.069,0.222,0.156,0.339,0.224   c0.139,0.084,0.267,0.155,0.384,0.216c-0.019-0.182,0.021-0.345,0.076-0.453c0.063-0.125,0.216-0.178,0.342-0.12   c1.446,0.662,3.174,0.702,4.136,0.662C21.594,15.289,20.519,13.594,20.47,13.515z"/></g></svg>
                                <p class="percentag">75%</p>
                            </div>
                        </div>      
                </div>
          </div>
        <?php load_temp("footer.php"); ?>
  </body> 
</html>