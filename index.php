<!DOCTYPE html>
<head>
    <title>Pen Name Creator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="intro">

    <h2 class="center">Welcome to the pen name creator!</h2>

    <p>Want a pseudonym for your publishing life? Maybe just a cool character name for a game or story?</p>
    <p>You've come to the right place!</p>
    <p>Just enter 4 given names and 4 surnames into the fields below, and you'll have a full list of all possible combinations of those names.</p>

</div>

<div class="info">
    <button class="info-button" id="ibutton-1"><p>Why have a pen name?</p><p>&#10148;</p></button>
    
    <div class="info-panel" id="panel-1">
        <p>You could choose a pen name for any number of reasons.</p>
            
        <p>Your real name might be difficult to pronounce, or maybe you want a gender-neutral name.
        Your real name might not fit with the genre you're writing for&mdash;or maybe it's not quite right for your target audience.
        You might also want to keep your writing secret from your employers or family members, or maybe you quite simply want a name that <em>sounds cool.</em>
        </p>
        <p>
        Any reason is a valid one. There's no rule saying you can't write under a pseudonym; countless authors have done so for centuries!
        </p>
    </div>

    <button class="info-button" id="ibutton-2"><p>How to choose names</p><p>&#10148;</p></button>

    <div class="info-panel" id="panel-2">
        <p>If you want to create a pen name, here are a few things to consider:</p>
        <ul>
            <li><strong>Does it sound like you?</strong> Say the name out loud a few times. Does it suit you? If someone called that name out on the street, would you turn around?</li>
            <li><strong>Keep it simple.</strong> The most memorable names are the easiest ones to pronounce. Go for familiar names&mdash;or if you want a unique name, choose one that's short and straightforward.</li>
            <li><strong>Make it meaningful.</strong> Choose a name that means something to you. Maybe it's a relative's maiden name or a favorite celebrity. Maybe it sounds pretty or has a cool meaning&mdash;or maybe you just love names that start with J.</li>
            <li><strong>Consider your audience.</strong> Think about your target demographic. Are they men or women? Children or adults? Research names that appeal to certain age groups and/or subcultures.</li>
        </ul>
    </div>

    <button class="info-button" id="ibutton-3"><p>Name resources</p><p>&#10148;</p></button>

    <div class="info-panel" id="panel-3">
        <p>The internet is one of the best resources for finding the perfect names for you and/or your characters.</p>
        <p>I've compiled a list of the sites I use regularly.</p>

        <ul>
            <li><strong><a href="https://www.behindthename.com/">Behind The Name</a></strong> is the best site for both first and <a href="https://surnames.behindthename.com/">last names.</a> You can sort by language, gender, letter patterns, meanings, and much more. You can even create an account to save your own name lists.</li>

            <li><strong><a href="http://www.20000-names.com/">20,000 Names</a></strong> has been online since 1999 (longer than I've been around!), and it houses an extensive list of unique names. You can sort by theme or country of origin.</li>

            <li><strong><a href="https://babynames.com/">BabyNames.com</a></strong> lets you sort by year of popularity, meaning you can choose a name that fits your target age group in just a few clicks. When you click on a name, you can also peruse a list of similar names that other users like.</li>

            <li><strong><a href="https://www.wikipedia.org/">Wikipedia</a></strong>, believe it or not, is also a great resource for finding names! You'll have to do some digging, though, so it helps to know the right terms ("surnames of [country]," "[language] given names," et cetera).</li>

            <li><strong><a href="https://namecombiner.net/">Name Combiner</a></strong> will help you come up with unique names (and it was actually the inspiration for this project!). Enter up to four names, and the site will combine them into new, never-before-seen names (e.g., Ella + Linda = Elinda).</li>
        </ul>
    </div>

</div>

</div>

    <form action="combine.php" method="post" class="name-form">
        <div class="inputs">
            <div class="name-input">
                <h3>Given Names</h3>
                <input type="text" name="given-1" placeholder = "first given name" required>

                <input type="text" name="given-2" placeholder = "second given name" required>

                <input type="text" name="given-3" placeholder = "third given name" required>

                <input type="text" name="given-4" placeholder = "fourth given name" required>
            </div>

            <div class="name-input">
                <h3>Surnames</h3>
                <input type="text" name="surname-1" placeholder = "first surname" required>

                <input type="text" name="surname-2" placeholder = "second surname" required>

                <input type="text" name="surname-3" placeholder = "third surname" required>

                <input type="text" name="surname-4" placeholder = "fourth surname" required>
            </div>
        </div>

        <input type="submit" name="sub" class="form-end">

    </form>
<script src="script.js"></script>
</body>

</html>