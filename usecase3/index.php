<?php

declare(strict_types=1);

require_once "./classes/content.php";

$content1 = new Content("article", "Detachable Penis Missing - Man Flabbergasted!", 
"I woke up this morning with a bad hangover<br>
And my penis was missing again.<br>
This happens all the time.<br>
It's detachable.<br>
This comes in handy a lot of the time.<br>
I can leave it home, when I think it's gonna get me in trouble,<br>
Or I can rent it out, when I don't need it.<br>
But now and then I go to a party, get drunk,<br>
And the next morning I can't for the life of me<br>
Remember what I did with it.<br>
First I looked around my apartment, and I couldn't find it.<br>
So I called up the place where the party was,<br>
They hadn't seen it either.<br>
I asked them to check the medicine cabinet<br>
'Cause for some reason I leave it there sometimes<br>
But not this time.<br>
So I told them if it pops up to let me know.<br>
I called a few people who were at the party,<br>
But they were no help either.<br>
I was starting to get desperate.<br>
I really don't like being without my penis for too long.<br>
It makes me feel like less of a man,<br>
And I really hate having to sit down every time I take a leak.<br>",
true);

$content2 = new Content("article", "Man Finds Missing Genitals", 
"After a few hours of searching the house,<br>
And calling everyone I could think of,<br>
I was starting to get very depressed,<br>
So I went to the Kiev, and ate breakfast.<br>
Then, as I walked down Second Avenue towards St. Mark's Place,<br>
Where all those people sell used books and other junk on the street,<br>
I saw my penis lying on a blanket<br>
Next to a broken toaster oven.<br>
Some guy was selling it.<br>
I had to buy it off him.<br>
He wanted twenty-two bucks, but I talked him down to seventeen.<br>
I took it home, washed it off,<br>
And put it back on. I was happy again. Complete.<br>
People sometimes tell me I should get it permanently attached,<br>
But I don't know.<br>
Even though sometimes it's a pain in the ass,<br>
I like having a detachable penis.",
false);

$content3 = new Content("ad", "For Sale: Detachable Penis", 
"Found at the Pub<br>
Condition: used<br>
Price: $22",
false);

$content4 = new Content("vacancy", "Wanted - Stripper of Ambiguous Sex",
"Currently hiring a stripper of ambiguous sex to work shifts on regular evenings and the occasional Gay Cowboy Friday.<br>
No need for resumes, just come by for an introductory meeting and a physical inspection.",
false);

$allContent = [$content1, $content2, $content3, $content4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISTINGUISHED NEWS OUTLET</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Latest entries:</h1>
    <?php foreach ($allContent as $content): ?>
        <?php switch ($content->getType()) {
            case "article":
                $newTitle = $content->getTitle();
                if ($content->getBreaking() === true) {
                $newTitle = "BREAKING: " . $newTitle;
                }
                break;
            case "ad":
                $newTitle = strtoupper($content->getTitle());
                break;
            case "vacancy":
                $newTitle = $content->getTitle() . " - APPLY NOW!";
                break;
        }
        echo "<h2>" . $newTitle . "</h2>"; 
        echo "<p>" . $content->getText() . "</p>";
        echo "<hr>"; 
        ?>
    <?php endforeach; ?>
</body>
</html>
