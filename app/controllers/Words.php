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
                'untranslatableText' => trim($_POST['untranslatableText']),
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
                    $decodeText = html_entity_decode($data['learnedText'], ENT_QUOTES, 'utf-8');
                    $uniqWords = (new TextProcessor())->getUniqWordsObj($decodeText, $language);
                    $notLearnedWords = $this->wordsTablesModel->getNotLearnedWordsFrom($uniqWords, $language);

                    // Add learned words
                    if ($this->wordsTablesModel->addWords($notLearnedWords, $language)) {
                        flash('addWords_success', 'Learned words added');
                    } else {
                        flash('addWords_error', 'Learned words not added', 'alert alert-warning');
                    }
                }

                if (!empty($data['untranslatableText']))
                {
                    // Process untranslatable text
                    $decodeText = html_entity_decode($data['untranslatableText'], ENT_QUOTES, 'utf-8');
                    $uniqWords = (new TextProcessor())->getUniqWordsObj($decodeText, $language);
                    $notLearnedWords = $this->wordsTablesModel->getNotLearnedWordsFrom($uniqWords, $language);

                    // Add untranslatable words
                    if ($this->wordsTablesModel->addUntranslatableWords($notLearnedWords, $language)) {
                        flash('addUntranslatableWords_success', 'Untranslatable words added');
                    } else {
                        flash('addUntranslatableWords_error', 'Untranslatable words not added', 'alert alert-warning');
                    }
                }

                Helper::redirect('words/add');
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
                'untranslatableText' => '',
                'languageId' => '',
                'languageId_err' => '',
            ];

            $this->view('words/add', $data);
        }
    }

    public function delete()
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
                'untranslatableText' => trim($_POST['untranslatableText']),
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
                    $uniqWords = (new TextProcessor())->getUniqWordsObj($data['learnedText'], $language);

                    // Delete learned words
                    if ($this->wordsTablesModel->deleteWords($uniqWords, $language)) {
                        flash('deleteWords_success', 'Learned words deleted');
                    } else {
                        flash('deleteWords_error', 'Learned words not deleted', 'alert alert-warning');
                    }
                }

                if (!empty($data['untranslatableText']))
                {
                    // Process untranslatable text
                    $uniqWords = (new TextProcessor())->getUniqWordsObj($data['untranslatableText'], $language);

                    // Add untranslatable words
                    if ($this->wordsTablesModel->deleteUntranslatableWords($uniqWords, $language)) {
                        flash('deleteUntranslatableWords_success', 'Untranslatable words deleted');
                    } else {
                        flash('deleteUntranslatableWords_error', 'Untranslatable words not deleted', 'alert alert-warning');
                    }
                }

                Helper::redirect('words/delete');
            }
            else
            {
                // Load view with errors
                $this->view('words/delete', $data);
            }


        }
        else
        {
            $languages = $this->languagesTableModel->getLanguages();
            $data = [
                'languages' => $languages,
                'learnedText' => '',
                'untranslatableText' => '',
                'languageId' => '',
                'languageId_err' => '',
            ];

            $this->view('words/delete', $data);
        }
    }
}