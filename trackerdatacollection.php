<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $date = htmlspecialchars($_POST['date']);
  $daymood  = htmlspecialchars($_POST['daymood']);
  echo  $date, ' ', $daymood;
?>

/*          Date:<br>
            <input type="date" name="date"><br><br>
            Took Seroquel last night at:<br>

            <input type="time" name="seroquel"><br>
            Got into bed at:<br>
            <input type="time" name="outofbedtime"><br>
            Went to sleep at:<br>
            <input type="time" name="bedtime"><br>
            Woke up at:<br>
            <input type="time" name="wakeuptime"><br>
            Got out of bed at:<br>
            <input type="time" name="outofbedtime"><br>
            ...did I linger in bed because of the cat?<br>
            <input type="checkbox" name="cat">...yes<br><br>

            ...or did I stay up all night?<br>
            <input type="checkbox" name="allnighter">yes<br>
            <input type="checkbox" name="allnighter">nearly<br><br>

            Took Wellbutrin at:<br>
            <input type="time" name="wellbutrin"><br>
            <input type="checkbox" name="wellbutrinforgot">shit, I forgot<br>
            (if I forgot did I take a half and at what time?)<br>
            <input type="text" name="wellbutrindetails"><br><br>


            <span style="font-weight: bold">~ DAY RECORD ~</span><br><br>

            <span style="text-decoration: underline">Day mood(s):</span><br>
            <input type="checkbox" name="daymood" value="happy">really truly feeling happy<br>
            <input type="checkbox" name="daymood" value="helpedsomeone">felt fulfilled because I helped someone<br>
            <input type="checkbox" name="daymood" value="helpedmyself">felt fulfilled because I helped myself<br>
            <input type="checkbox" name="daymood" value="ontherighttrack">feeling on the right track<br>
            <input type="checkbox" name="daymood" value="content">happy, content, fine, maybe mindless<br>
            <input type="checkbox" name="daymood" value="mediocre">mediocre, a little down<br>
            <input type="checkbox" name="daymood" value="sad">sad, pain, maybe heartache<br>
            <input type="checkbox" name="daymood" value="stressed">really stressed<br>
            <input type="checkbox" name="daymood" value="avoidant">feeling overwhelming avoidant dread in the back of my mind<br>
            <input type="checkbox" name="daymood" value="pushingemotions">felt like I was pushing all my emotions out of my mind<br>
            <input type="checkbox" name="daymood" value="pushingemotions">felt emotionally in tune, allowed myself to feel<br>
            <input type="checkbox" name="daymood" value="cried">I cried<br>
            <input type="text" name="daymooddetails"><br><br>

            <span style="text-decoration: underline">Day dreaminess, on a scale from 1 to 10:</span><br>
            <input type="number" name="daydreaminess" min="1" max="11"><br><br>

            <span style="text-decoration: underline">Day self-image:</span><br>
            <input type="radio" name="dayselfimage" value="hot">feelin' hot as hell tbh <3<br>
            <input type="radio" name="dayselfimage" value="pretty">feelin' pretty :~)<br>
            <input type="radio" name="dayselfimage" value="okay">feelin' okay, it'll do<br>
            <input type="radio" name="dayselfimage" value="not">not feelin' attractive<br>
            <input type="radio" name="dayselfimage" value="egad">egad<br><br>

            <span style="text-decoration: underline">Day weight:</span><br>
            <input type="radio" name="dayweight" value="skinny">really thin<br>
            <input type="radio" name="dayweight" value="skinny">thin<br>
            <input type="radio" name="dayweight" value="skinny">a little more than I'd like<br>
            <input type="radio" name="dayweight" value="skinny">feelin' big<br>
            <input type="radio" name="dayweight" value="skinny">kind of bloated<br>
            <input type="radio" name="dayweight" value="skinny">very bloated<br><br>

            <span style="text-decoration: underline">In the day I ate:</span><br>
            <input type="radio" name="dayiate" value="very little">very little<br>
            <input type="radio" name="dayiate" value="good">restricted but good<br>
            <input type="radio" name="dayiate" value="normal">a normal amount (/idk)<br>
            <input type="radio" name="dayiate" value="somuchokay">so much but it's okay<br>
            <input type="radio" name="dayiate" value="somuchbad">so much and I'm upset<br>
            <input type="radio" name="dayhealth" value="healthy">mostly healthy food, it felt healthy<br>
            <input type="radio" name="dayhealth" value="unhealthy">mostly unhealthy food, it felt unhealthy<br><br>

            <span style="text-decoration: underline">Appetite in the day:</span><br>
            <input type="radio" name="dayappetite" value="low">low<br>
            <input type="radio" name="dayappetite" value="lowtasteless">low + tasteless<br>
            <input type="radio" name="dayappetite" value="middle">middle<br>
            <input type="radio" name="dayappetite" value="middletasteless">middle + tasteless<br>
            <input type="radio" name="dayappetite" value="high">high<br>
            <input type="radio" name="dayappetite" value="hightasteless">high + tasteless<br><br>

            <span style="text-decoration: underline">Notes about day food/weight/health/body, if any:</span><br>
            <input type="text" name="dayfoodnotes"><br>
            <input type="checkbox" name="dayvegan" value="vegan">100% vegan<br>
            <input type="checkbox" name="dayvegan" value="smidge">broke veganism, just a smidge<br>
            <input type="checkbox" name="dayvegan" value="broke">...broke veganism<br>
            <input type="checkbox" name="daytummy" value="notroubles">no tummy troubles<br>
            <input type="checkbox" name="daytummy" value="troubles">tummy troubles<br><br>

            <span style="font-weight: bold">~ NIGHT RECORD ~</span><br><br>

            <span style="text-decoration: underline"> Night mood(s):</span><br>
            <input type="checkbox" name="nightmood" value="happy">really truly feeling happy<br>
            <input type="checkbox" name="nightmood" value="helpedsomeone">felt fulfilled because I helped someone<br>
            <input type="checkbox" name="nightmood" value="helpedmyself">felt fulfilled because I helped myself<br>
            <input type="checkbox" name="nightmood" value="ontherighttrack">feeling on the right track<br>
            <input type="checkbox" name="nightmood" value="content">happy, content, fine, maybe mindless<br>
            <input type="checkbox" name="nightmood" value="mediocre">mediocre, a little down<br>
            <input type="checkbox" name="nightmood" value="sad">sad, pain, maybe heartache<br>
            <input type="checkbox" name="nightmood" value="stressed">really stressed<br>
            <input type="checkbox" name="nightmood" value="avoidant">feeling overwhelming avoidant dread in the back of my mind<br>
            <input type="checkbox" name="nightmood" value="pushingemotions">felt like I was pushing all my emotions out of my mind<br>
            <input type="checkbox" name="nightmood" value="pushingemotions">felt emotionally in tune, allowed myself to feel<br>
            <input type="checkbox" name="nightmood" value="cried">I cried<br>
            <input type="text" name="nightmooddetails"><br><br>

            <span style="text-decoration: underline">Night dreaminess, on a scale from 1 to 10:</span><br>
            <input type="number" name="nightdreaminess" min="1" max="11"><br><br>

            <span style="text-decoration: underline">Night self-image:</span><br>
            <input type="radio" name="nightselfimage" value="hot">feelin' hot as hell tbh <3<br>
            <input type="radio" name="nightselfimage" value="pretty">feelin' pretty :~)<br>
            <input type="radio" name="nightselfimage" value="okay">feelin' okay, it'll do<br>
            <input type="radio" name="nightselfimage" value="not">not feelin' attractive<br>
            <input type="radio" name="nightselfimage" value="egad">egad<br><br>

            <span style="text-decoration: underline">Night weight:</span><br>
            <input type="radio" name="nightweight" value="skinny">really thin<br>
            <input type="radio" name="nightweight" value="skinny">thin<br>
            <input type="radio" name="nightweight" value="skinny">a little more than I'd like<br>
            <input type="radio" name="nightweight" value="skinny">feelin' big<br>
            <input type="radio" name="nightweight" value="skinny">kind of bloated<br>
            <input type="radio" name="nightweight" value="skinny">very bloated<br><br>

            <span style="text-decoration: underline">In the night I ate:</span><br>
            <input type="radio" name="nightiate" value="very little">very little<br>
            <input type="radio" name="nightiate" value="good">restricted but good<br>
            <input type="radio" name="nightiate" value="normal">a normal amount (/idk)<br>
            <input type="radio" name="nightiate" value="somuchokay">so much but it's okay<br>
            <input type="radio" name="nightiate" value="somuchbad">so much and I'm upset<br><br>

            <span style="text-decoration: underline">Appetite in the night:</span><br>
            <input type="radio" name="nightappetite" value="low">low<br>
            <input type="radio" name="nightappetite" value="lowtasteless">low + tasteless<br>
            <input type="radio" name="nightappetite" value="middle">middle<br>
            <input type="radio" name="nightappetite" value="middletasteless">middle + tasteless<br>
            <input type="radio" name="nightappetite" value="high">high<br>
            <input type="radio" name="nightappetite" value="hightasteless">high + tasteless<br><br>

            <span style="text-decoration: underline">Notes about day food/weight/health/body, if any:</span><br>
            <input type="text" name="nightfoodnotes"><br><br>
            <input type="checkbox" name="nightvegan" value="vegan">100% vegan<br>
            <input type="checkbox" name="nightvegan" value="smidge">broke veganism, just a smidge<br>
            <input type="checkbox" name="nightvegan" value="broke">...broke veganism<br>
            <input type="checkbox" name="daytummy" value="notroubles">no tummy troubles<br>
            <input type="checkbox" name="daytummy" value="troubles">tummy troubles<br><br>

            <span style="font-weight: bold">~ PATTERN SEARCHING: CORE ~</span><br><br>

            <span style="text-decoration: underline">Did you take any drugs today?</span><br>
            <input type="checkbox" name="cat">yes, just alcohol<br>
            <input type="checkbox" name="cat">weed<br>
            <input type="checkbox" name="cat">Adderall<br>
            <input type="checkbox" name="cat">a psychedelic<br>
            <input type="text" name="drugs"><br><br>

            <span style="text-decoration: underline">Were you manic today?</span><br>
            <input type="radio" name="manic" value="yes">yes<br>
            <input type="radio" name="manic" value="somewhat">somewhat<br>
            <input type="radio" name="manic" value="no">no<br><br>

            <span style="text-decoration: underline">Were you deeply dissociated today?</span><br>
            <input type="radio" name="dissociated" value="yes">yes<br>
            <input type="radio" name="dissociated" value="somewhat">somewhat<br>
            <input type="radio" name="dissociated" value="no">no<br><br>

            <span style="text-decoration: underline">Were you depressed today?</span><br>
            <input type="radio" name="depressed" value="yes">yes<br>
            <input type="radio" name="depressed" value="somewhat">somewhat<br>
            <input type="radio" name="depressed" value="no">no<br><br>

            <span style="text-decoration: underline">Did I go out tonight?</span><br>
            <input type="radio" name="goout" value="yes">yes<br>
            <input type="radio" name="goout" value="somewhat">somewhat<br>
            <input type="radio" name="goout" value="no">no<br>
            If so, optionally: details? who, what, when, where, why<br>
            <input type="text" name="gooutdetails"><br><br>

            <span style="text-decoration: underline">Were you hungover today?</span><br>
            <input type="radio" name="hungover" value="yes">yep, I felt icky all day<br>
            <input type="radio" name="hungover" value="yesday">yes but it was gone by the night<br>
            <input type="radio" name="hungover" value="no">nope<br><br>

            <span style="text-decoration: underline">Did you leave the house today?</span><br>
            <input type="radio" name="goout" value="yes">yes<br>
            <input type="radio" name="goout" value="yes">nope :~/<br><br>

            <span style="text-decoration: underline">Hours spent on compulsions:</span><br>
            <input type="number" name="compulsions" min="0" max="24"><br><br>

            <span style="text-decoration: underline">Which compulsions/mania?</span><br>
            <input type="checkbox" name="whichcompulsions" value="spotify">Spotify<br>
            <input type="checkbox" name="whichcompulsions" value="mbti">MBTI<br>
            <input type="checkbox" name="whichcompulsions" value="depopselling">Depop, selling<br>
            <input type="checkbox" name="whichcompulsions" value="depopbuying">Depop, buying<br>
            <input type="checkbox" name="whichcompulsions" value="radio">Radio, excessively<br>
            <input type="text" name="othercompulsions"><br><br>

            <span style="text-decoration: underline">What were you avoiding, what are you stressed about?</span><br>
            <input type="checkbox" name="stressors" value="current classes">current classes<br>
            <input type="checkbox" name="stressors" value="grandparents">grandparents<br>
            <input type="checkbox" name="stressors" value="money">money<br>
            <input type="checkbox" name="stressors" value="existential">existential future career etc<br>
            <input type="checkbox" name="stressors" value="loneliness">breakup, loneliness, jealousy<br>
            <input type="checkbox" name="stressors" value="nostalgia">nostalgia issues from my past<br>
            <input type="checkbox" name="stressors" value="selfworth">question of self worth<br>
            <input type="text" name="otherstressors"><br>
            Conscious stress level from 1 to 10: <input type="number" name="stresslevel" min="0" max="11"><br>
            Unconscious sensed stress level from 1 to 10: <input type="number" name="stresslevel" min="0" max="11"><br><br>

            <span style="text-decoration: underline">Money spent:</span><br>
            <input type="checkbox" name="money" value="none">none<br>
            <input type="checkbox" name="money" value="alittle">a little... like <$15-20<br>
            <input type="checkbox" name="money" value="notgood">not good actually, like maybe $20-$40<br>
            <input type="checkbox" name="money" value="alot">a lot... more than $40...<br>
            <input type="checkbox" name="money" value="matters">on stuff that mattered though<br>
            <input type="checkbox" name="money" value="matters">on non-essentials...<br>
            <input type="checkbox" name="money" value="depop">small victory, I made money on Depop<br>
            <input type="text" name="moneydetails"><br><br>

            <span style="text-decoration: underline">Exercise?</span><br>
            <input type="checkbox" name="exercise" value="run">went for a run!<br>
            <input type="checkbox" name="exercise" value="littlestretch">stretched a little<br>
            <input type="checkbox" name="exercise" value="bigstretch">stretched a lot<br>
            <input type="checkbox" name="exercise" value="walked">walked a lot<br>
            <input type="checkbox" name="exercise" value="laundry">did something else laborious like laundry or cleaning<br>
            <input type="checkbox" name="exercise" value="nada">...nada<br><br>

            <span style="text-decoration: underline">Productivity, on a scale from 1 to 10:</span><br>
            <input type="number" name="productivity" min="0" max="10"><br><br>

            <span style="font-weight: bold">~ PATTERN SEARCHING: MORE, IF I'M UP TO IT ~</span><br><br>

            <span style="text-decoration: underline">Did I dream last night?</span><br>
            <input type="checkbox" name="dreams" value="yes">yes<br>
            <input type="checkbox" name="dreams" value="no">no<br>
            <input type="checkbox" name="dreams" value="cantremember">can't remember<br>
            <input type="text" name="dreamdetails"><br><br>

            <span style="text-decoration: underline">Hours spent on Radio:</span><br>
            <input type="number" name="radio" min="0" max="24"><br><br>

            <span style="text-decoration: underline">Took vitamins?</span><br>
            <input type="radio" name="vitamins" value="before4">yes, before 4pm<br>
            <input type="radio" name="vitamins" value="after4">yes, after 4pm<br>
            <input type="radio" name="vitamins" value="no">not today oops<br><br>

            <span style="text-decoration: underline">Hours of screen time:</span><br>
            Phone (from Moment): <input type="number" name="phonescreentime" min="0" max="24"><br>
            Laptop (estimated): <input type="number" name="laptopscreentime" min="0" max="24"><br>
            Hours spent watching entertainment media: <input type="number" name="entertainmentscreentime" min="0" max="24"><br><br>

            <span style="text-decoration: underline">Hours spent on the couch:</span><br>
            <input type="number" name="couch" min="0" max="24"><br><br>

            <span style="text-decoration: underline">Extra strong nostalgia? like a weird fixation on my past/childhood?</span><br>
            <input type="checkbox" name="nostalgia" value="yes">yes<br>
            <input type="checkbox" name="nostalgia" value="no">nah, not today<br>
            <input type="checkbox" name="nostalgia" value="pushed">I pushed those thoughts away<br>
            <input type="text" name="nostalgiadetails"><br><br>

            <span style="text-decoration: underline">Tracing words with my fingers?:</span><br>
            <input type="radio" name="tracing" value="alot">a lot<br>
            <input type="radio" name="tracing" value="alittle">a little<br>
            <input type="radio" name="tracing" value="no">not today<br><br>

            <span style="text-decoration: underline">Who did I have meaningful interactions/conversations with?:</span><br>
            <input type="checkbox" name="conversations" value="parents">Dad or Susanne<br>
            <input type="checkbox" name="conversations" value="grandparents">grandparents<br>
            <input type="checkbox" name="conversations" value="mother">my mother<br>
            <input type="checkbox" name="conversations" value="closefriend">a very close friend (Carla, Tina, Dan)<br>
            <input type="checkbox" name="conversations" value="uclapeer">a UCLA peer<br>
            <input type="checkbox" name="conversations" value="ex">an ex<br>
            <input type="text" name="conversationsdetails"><br><br>

            <span style="text-decoration: underline">Minutes spent meditating:</span><br>
            <input type="number" name="meditating" min="0" max="1440"><br><br>

            <span style="text-decoration: underline">Did I learn anything interesting today? academic, Internet rabbit hole, personal, etc?</span><br>
            <input type="text" name="learn"><br><br>

            <span style="text-decoration: underline">Productivity, things I got done today:</span><br>
            <input type="text" name="productivity"><br><br>

            <span style="text-decoration: underline">Did I blush?:</span><br>
            <input type="radio" name="blushing" value="yes">yes, without alcohol<br>
            <input type="radio" name="blushing" value="alcohol">yes, because of alcohol<br>
            <input type="radio" name="blushing" value="mildly">mildly?<br>
            <input type="radio" name="blushing" value="no">no<br><br>

            <span style="text-decoration: underline">If I recorded my waist measurement or weight, put it here:</span><br>
            <input type="text" name="waist"><br><br>

            <span style="text-decoration: underline">What outfit(s) did I wear? (optional, may help me remember the day)</span><br>
            <input type="text" name="outfit"><br><br>

            <span style="text-decoration: underline">Anything else??</span><br>
            <input type="text" name="anythingelse"><br><br><br>
