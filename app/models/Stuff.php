<?php


class Stuff
{
    private int $id;
    private string $name;
    /**
     * @var int|null
     */
    private ?int $yearOfIssue;
    private int $typeId;
    private int $languageId;
    private string $description;
    private string $text;
    private string $words;
    private int $wordCount;
    private int $userId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @param StuffTable $stuffTable
     * @return string Text of error
     */
    public function setId(int $id, StuffTable $stuffTable): string
    {
        if (!$stuffTable->findById($id))
        {
            return 'This id of stuff not exists.';
        }
        $this->id = $id;
        return '';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return string Text of error
     */
    public function setName(string $name): string
    {
        $limitBytes = 100;
        $bytesInName = strlen($name);
        if (empty($name))
        {
            return 'Please enter name';
        }
        elseif ($bytesInName > $limitBytes)
        {
            return 'Name have '.$bytesInName.' bytes, when limit is '.$limitBytes.' bytes.';
        }
        else
        {
            $this->name = $name;
            return '';
        }
    }

    /**
     * @return int|null
     */
    public function getYearOfIssue(): int
    {
        return $this->yearOfIssue;
    }

    /**
     * @param string $yearOfIssue
     * @return string Text of error
     */
    public function setYearOfIssue(string $yearOfIssue): string
    {
        if ($yearOfIssue === '')
        {
            $yearOfIssue = 0;
        }
        settype($yearOfIssue, "int");
        if ($yearOfIssue > 9999 || $yearOfIssue < 0)
        {
            return 'Incorrect year';
        }
        $this->yearOfIssue = $yearOfIssue;
        return '';
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     * @param StuffTypeTable $stuffTypeTable
     * @return string Text of error
     */
    public function setTypeId(int $typeId, StuffTypeTable $stuffTypeTable): string
    {
        if ($stuffTypeTable->getStuffType($typeId) === false)
        {
            return "Invalid stuff type.";
        }
        $this->typeId = $typeId;
        return '';
    }

    /**
     * @return int
     */
    public function getLanguageId(): int
    {
        return $this->languageId;
    }

    /**
     * @param int $languageId
     * @param LanguagesTable $languagesTable
     * @return string Text of error
     */
    public function setLanguageId(int $languageId, LanguagesTable $languagesTable): string
    {
        if ($languagesTable->getById($languageId) === false)
        {
            return "Invalid language";
        }
        $this->languageId = $languageId;
        return '';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return string Text of error
     */
    public function setDescription(string $description): string
    {
        $limitBytes = 300;
        $bytes = strlen($description);
        if ($bytes > $limitBytes)
        {
            return 'Limit is '.$limitBytes.' bytes, when you have '.$bytes;
        }
        $this->description = $description;
        return '';
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @param string $language
     * @return string
     */
    public function setText(string $text, string $language): string
    {
        $limitBytes = 1000000;
        $bytes = strlen($text);
        if (empty($text))
        {
            return 'Text is empty';
        }
        elseif ($bytes > $limitBytes)
        {
            return 'Limit is '.$limitBytes.' bytes, when you have '.$bytes;
        }
        elseif ($bytes > 16777215)
        {
            return 'Text is bigger then can added to database. You have '.$bytes;
        }
        $textProcessor = new TextProcessor();
        $this->text = $text;
        $this->setWords($textProcessor->getWords($text, $language));
        return '';
    }

    /**
     * @return string
     */
    public function getWords(): string
    {
        return $this->words;
    }

    /**
     * @param array $words
     * @return string Text of error
     */
    private function setWords(array $words)
    {
        $stringOfWords = '';
        foreach ($words as $word) {
            $stringOfWords .= $word.' ';
        }
        if (strlen($stringOfWords) > 16777215)
        {
            die('String of words is too long. More then can add to database.');
        }
        $stringOfWords = rtrim($stringOfWords);
        $this->words = $stringOfWords;
        $this->setWordCount(count($words));
        return true;
    }

    /**
     * @return int
     */
    public function getWordCount(): int
    {
        return $this->wordCount;
    }

    /**
     * @param int $wordCount
     */
    private function setWordCount(int $wordCount): void
    {
        if ($wordCount === 0)
        {
            die("Word count must be more than 0");
        }
        $this->wordCount = $wordCount;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @param User $user
     * @return string Text of error
     */
    public function setUserId(int $userId, User $user): string
    {
        if ($user->getUserById($userId) === false)
        {
            return "Invalid user ID";
        }
        $this->userId = $userId;
        return '';
    }
}