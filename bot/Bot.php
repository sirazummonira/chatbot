
<?php
class Bot
{
    private $name = "Alicia";
    private $gender = "Female";
    private $link = "<a href='https://www.w3schools.com'>Visit W3Schools</a>";

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }
    public function getLink()
    {
        return $this->link;
    }

    public function hears($message, callable $call)
    {
        $call(new Bot);
        return $message;
    }

    public function reply($response)
    {
        echo $response;
    }

    public function ask($question, array $questionDictionary)
    {
        $question = trim($question);
        foreach ($questionDictionary as $questions => $value) {
            if ($question == $questions) {
                return $value;
            }
        }
    }
}
