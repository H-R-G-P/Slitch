<?php


class Words extends Controller
{
    private LanguagesTable $languagesTableModel;
    private WordsTables $wordsTablesModel;
    private Stuff $stuffModel;

    public function __construct()
    {
        $this->languagesTableModel = $this->model('LanguagesTable');
        $this->wordsTablesModel = $this->model('WordsTables');
        $this->stuffModel = $this->model('Stuff');
    }

    public function index()
    {

    }

    public function add()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $languages = $this->languagesTableModel->getLanguages();
            $data = [
                'languages' => $languages,
                'learnedText' => trim($_POST['learnedText']),
                'notTranslatedText' => trim($_POST['notTranslatedText']),
                'languageId' => $_POST['languageId'],
                'languageId_err' => '',
            ];

            // Validate Language ID
            if (empty($data['languageId']))
            {
                $data['languageId_err'] = 'Please select language';
            }
            else
            {
                $data['languageId_err'] = $this->stuffModel
                    ->setLanguageId($data['languageId'], $this->languagesTableModel);
            }

            // Make sure errors are empty
            if (empty($data['languageId_err']))
            {
                // Validated
                $language = ($this->languagesTableModel->getById($data['languageId']))->name;

                if (!empty($data['learnedText']))
                {
                    // Process learned text
                    $learnedWords = $this->wordsTablesModel->getArrayWords($language);
                    $notTranslatedWords = $this->wordsTablesModel->getArrayNotTranslatedWords($language);
                    $uniqWords = (new TextProcessor($data['learnedText'], $language))->getUniqWords();
                    $notLearnedWords = array_diff($uniqWords, $learnedWords, $notTranslatedWords);

                    // Add learned words
                    if ($this->wordsTablesModel->addWords($notLearnedWords, $language)) {
                        flash('addWords_success', 'Learned words added');
                    } else {
                        flash('addWords_error', 'Learned words not added', 'alert alert-warning');
                    }
                }

                if (!empty($data['notTranslatedText']))
                {
                    // Process not translated text
                    $learnedWords = $this->wordsTablesModel->getArrayWords($language);
                    $notTranslatedWords = $this->wordsTablesModel->getArrayNotTranslatedWords($language);
                    $uniqWords = (new TextProcessor($data['notTranslatedText'], $language))->getUniqWords();
                    $notLearnedWords = array_diff($uniqWords, $learnedWords, $notTranslatedWords);

                    // Add not translated words
                    if ($this->wordsTablesModel->addNotTranslatedWords($notLearnedWords, $language)) {
                        flash('addNotTranslatedWords_success', 'Not translated words added');
                    } else {
                        flash('addNotTranslatedWords_error', 'Not translated words not added', 'alert alert-warning');
                    }
                }

                redirect('words/add');
            }
            else
            {
                // Load view with errors
                $this->view('words/add', $data);
            }


        }
        else
        {
            $languages = $this->languagesTableModel->getLanguages();
            $data = [
                'languages' => $languages,
                'learnedText' => '',
                'notTranslatedText' => '',
                'languageId' => '',
                'languageId_err' => '',
            ];

            $this->view('words/add', $data);
        }
    }

    public function delete()
    {

    }
}