<?php
function generateStory($singular_noun, $verb, $color, $distance){
  $story = "\nThe $singular_noun are lovely, $color, and deep.\nBut I have promises to keep,\nAnd $distance to go before I $verb,\nAnd miles to go before I sleep.\n";
  return $story;
}

echo generateStory("dog", "eat", "purple", "22 miles");
echo generateStory("car", "cook", "vermilion", "33 miles");
echo generateStory("empty void", "speak", "beige", "44 miles");