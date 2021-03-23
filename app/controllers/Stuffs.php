<?php


class Stuffs extends Controller
{
    private Stuff $stuffModel;
    private StuffTable $stuffTableModel;
    private StuffTypeTable $stuffTypeTableModel;
    private LanguagesTable $languagesTableModel;
    private User $userModel;
    private WordsTables $wordsTablesModel;

    public function __construct()
    {
        if (!isLoggedIn())
        {
            redirect('');
        }

        $this->stuffModel = $this->model('Stuff');
        $this->stuffTableModel = $this->model('StuffTable');
        $this->stuffTypeTableModel = $this->model('StuffTypeTable');
        $this->languagesTableModel = $this->model('LanguagesTable');
        $this->userModel = $this->model('User');
        $this->wordsTablesModel = $this->model('WordsTables');
    }

    public function index()
    {
        // Get stuffs
        $stuffs = $this->stuffTableModel->getStuffsByUserId($_SESSION['user_id']);

        $data = [
            'stuffs' => $stuffs
        ];

        $this->view('stuffs/index', $data);
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
            $stuffTypes = $this->stuffTypeTableModel->getStuffTypes();

            $data = [
                'name' => trim($_POST['name']),
                'yearOfIssue' => $_POST['yearOfIssue'],
                'typeId' => $_POST['typeId'],
                'languageId' => $_POST['languageId'],
                'description' => trim($_POST['description']),
                'text' => trim($_POST['text']),
                'languages' => $languages,
                'types' => $stuffTypes,
                'name_err' => '',
                'yearOfIssue_err' => '',
                'typeId_err' => '',
                'languageId_err' => '',
                'description_err' => '',
                'text_err' => '',
                'userId_err' => '',
                'stuff_err' => '',
            ];

            // Validate Name
            $data['name_err'] = $this->stuffModel
                ->setName($data['name']);

            // Validate Year Of Issue
            $data['yearOfIssue_err'] = $this->stuffModel
                ->setYearOfIssue($data['yearOfIssue']);

            // Validate Type ID
            $data['typeId_err'] = $this->stuffModel
                ->setTypeId($data['typeId'], $this->stuffTypeTableModel);

            // Validate Language ID
            $data['languageId_err'] = $this->stuffModel
                ->setLanguageId($data['languageId'], $this->languagesTableModel);

            // Validate Description
            $data['description_err'] = $this->stuffModel
                ->setDescription($data['description']);

            // Validate Text
            $data['text_err'] = $this->stuffModel
                ->setText($data['text'], $this->languagesTableModel->getById($data['languageId'])->name);

            // Validate User ID
            $data['userId_err'] = $this->stuffModel
                ->setUserId($_SESSION['user_id'], $this->userModel);

            // Check for Stuff with Name and Description
            if (empty($data['name_err']) &&
                empty($data['description_err']) &&
                $this->stuffTableModel->findStuffBy($data['name'], $data['description']))
            {
                // Stuff found
                $data['stuff_err'] = 'Stuff with this Name and Description already exists';
            }

            // Make sure errors are empty
            if (empty($data['name_err']) &&
                empty($data['yearOfIssue_err']) &&
                empty($data['typeId_err']) &&
                empty($data['languageId_err']) &&
                empty($data['description_err']) &&
                empty($data['text_err']) &&
                empty($data['userId_err']) &&
                empty($data['stuff_err']))
            {
                // Validated

                // Add stuff
                if ($this->stuffTableModel->add($this->stuffModel))
                {
                    flash('stuffAdded_success', 'Stuff added');
                    redirect('stuffs');
                }
                else
                {
                    flash('stuffAdded_error', 'Stuff not added', 'alert alert-warning');
                    redirect('stuffs');
                }
            }
            else
            {
                // Load view with errors
                $this->view('stuffs/add', $data);
            }
        }
        else
        {
            // Init data
            $languages = $this->languagesTableModel->getLanguages();
            $stuffTypes = $this->stuffTypeTableModel->getStuffTypes();

            $data = [
                'name' => '',
                'yearOfIssue' => '',
                'typeId' => '',
                'languageId' => '',
                'description' => '',
                'text' => '',
                'languages' => $languages,
                'types' => $stuffTypes,
                'name_err' => '',
                'yearOfIssue_err' => '',
                'typeId_err' => '',
                'languageId_err' => '',
                'description_err' => '',
                'text_err' => '',
                'userId_err' => '',
                'stuff_err' => '',
            ];

            $this->view('stuffs/add', $data);
        }
    }

    public function delete($id)
    {
        if ($this->stuffTableModel->delete($id))
        {
            flash('stuffDeleted_success', 'Stuff deleted');
            redirect('stuffs');
        }
        else
        {
            flash('stuffDeleted_error', 'Stuff not deleted', 'alert alert-warning');
            redirect('stuffs');
        }
    }

    public function show($id)
    {
        // Get stuff
        if (!$stuff = $this->stuffTableModel->getStuffById($id))
        {
            flash('showStuff_error', 'Undefined stuff', 'alert alert-warning');
            redirect('stuffs');
        }

        $words = explode(' ', $stuff->words);
        $uniqWords = array_unique($words);
        $uniqWordsCount = count($uniqWords);

        $data = [
            'stuff' => $stuff,
            'uniqWordsCount' => $uniqWordsCount,
        ];

        $this->view('stuffs/show', $data);
    }

    public function edit($id)
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $languages = $this->languagesTableModel->getLanguages();
            $stuffTypes = $this->stuffTypeTableModel->getStuffTypes();

            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'yearOfIssue' => $_POST['yearOfIssue'],
                'typeId' => $_POST['typeId'],
                'languageId' => $_POST['languageId'],
                'description' => trim($_POST['description']),
                'text' => trim($_POST['text']),
                'languages' => $languages,
                'types' => $stuffTypes,
                'id_err' => '',
                'name_err' => '',
                'yearOfIssue_err' => '',
                'typeId_err' => '',
                'languageId_err' => '',
                'description_err' => '',
                'text_err' => '',
                'userId_err' => '',
            ];

            // Validate Id
            $data['id_err'] = $this->stuffModel
                ->setId($id, $this->stuffTableModel);

            // Validate Name
            $data['name_err'] = $this->stuffModel
                ->setName($data['name']);

            // Validate Year Of Issue
            $data['yearOfIssue_err'] = $this->stuffModel
                ->setYearOfIssue($data['yearOfIssue']);

            // Validate Type ID
            $data['typeId_err'] = $this->stuffModel
                ->setTypeId($data['typeId'], $this->stuffTypeTableModel);

            // Validate Language ID
            $data['languageId_err'] = $this->stuffModel
                ->setLanguageId($data['languageId'], $this->languagesTableModel);

            // Validate Description
            $data['description_err'] = $this->stuffModel
                ->setDescription($data['description']);

            // Validate Text
            $data['text_err'] = $this->stuffModel
                ->setText($data['text'], $this->languagesTableModel->getById($data['languageId'])->name);

            // Validate User ID
            $data['userId_err'] = $this->stuffModel
                ->setUserId($_SESSION['user_id'], $this->userModel);

            // Make sure errors are empty
            if (empty($data['id_err']) &&
                empty($data['name_err']) &&
                empty($data['yearOfIssue_err']) &&
                empty($data['typeId_err']) &&
                empty($data['languageId_err']) &&
                empty($data['description_err']) &&
                empty($data['text_err']) &&
                empty($data['userId_err']))
            {
                // Validated

                // Edit stuff
                if ($this->stuffTableModel->edit($this->stuffModel))
                {
                    flash('stuffEdited_success', 'Stuff edited');
                    redirect('stuffs');
                }
                else
                {
                    flash('stuffEdited_error', 'Stuff not edited');
                    redirect('stuffs');
                }
            }
            else
            {
                // Load view with errors
                $this->view('stuffs/edit', $data);
            }
        }
        else
        {
            // Init data
            $stuff = $this->stuffTableModel->getStuffById($id);
            $languages = $this->languagesTableModel->getLanguages();
            $stuffTypes = $this->stuffTypeTableModel->getStuffTypes();

            $data = [
                'id' => $id,
                'name' => $stuff->name,
                'yearOfIssue' => $stuff->yearOfIssue,
                'typeId' => $stuff->typeId,
                'languageId' => $stuff->languageId,
                'description' => $stuff->description,
                'text' => $stuff->text,
                'words' => $stuff->words,
                'languages' => $languages,
                'types' => $stuffTypes,
                'id_err' => '',
                'name_err' => '',
                'yearOfIssue_err' => '',
                'typeId_err' => '',
                'languageId_err' => '',
                'description_err' => '',
                'text_err' => '',
                'userId_err' => '',
            ];

            $this->view('stuffs/edit', $data);
        }
    }

    public function handle($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            // Save
            // Add learned words
            if (isset($_POST['learnedWords']))
            {
                if (!$this->wordsTablesModel->addWords($_POST['learnedWords'], $_POST['language']))
                {
                    // Error
                    flash('handleStuff_error', "Can't add words to database", 'alert alert-danger');
                    redirect('stuffs');
                }
            }
            // Add untranslatable words
            if (isset($_POST['untranslatableWords']))
            {
                if (!$this->wordsTablesModel->addUntranslatableWords($_POST['untranslatableWords'], $_POST['language']))
                {
                    // Error
                    flash('handleStuff_error', "Can't add untranslatable words to database", 'alert alert-danger');
                    redirect('stuffs');
                }
            }
        }
        else
        {
            if (!$stuff = $this->stuffTableModel->getStuffById($id))
            {
                flash('handleStuff_error', 'Undefined stuff', 'alert alert-warning');
                redirect('stuffs');
            }

            $decodeText = html_entity_decode($stuff->text, ENT_QUOTES, 'utf-8');
            $uniqWords = (new TextProcessor())->getUniqWords($decodeText, $stuff->language);
            $notLearnedWords = $this->wordsTablesModel->getNotLearnedWordsFrom($uniqWords, $stuff->language);
            $uniqWordsObj = (new TextProcessor())->getUniqWordsObj($decodeText, $stuff->language);
            $notLearnedWordsObj = array_intersect($uniqWordsObj, $notLearnedWords);

            if (count($notLearnedWordsObj) === 0)
            {
                flash('handleStuff_error', 'All words in this stuff are learned.', 'alert alert-info');
                redirect('stuffs');
            }

            $data = [
                'notLearnedWords' => $notLearnedWordsObj,
                'stuff' => $stuff,
            ];

            $this->view('stuffs/handle', $data);
        }
    }
}