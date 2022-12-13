<?php

##REUSABLE QUERY FUNCTION##

function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

##QUESTIONS FUNCTIONS##

function getQueston($pdo, $id)
{
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM questions WHERE id = :id', $parameters);
    return $query->fetch();
}

function totalQuestions($pdo)
{
    $query = query($pdo, 'SELECT COUNT(*) FROM questions');
    $row = $query->fetch();
    return $row[0];
}

function allQuestions($pdo)
{
    $question = query($pdo, 'SELECT questions.id, questionText, questionDate,`image`,alt_text,`name`, email, moduleName FROM questions
	INNER JOIN students ON studentId  = students.id
	INNER JOIN modules ON moduleId = modules.id');
    return $question->fetchAll();
}

function insertQuestion($pdo, $questionText, $fileToUpload, $studentId, $moduleId)
{
    $query = 'INSERT INTO questions (questionText, questionDate,`image`, studentId, moduleId)
	VALUES (:questionText, CURDATE(),:fileToUpload, :studentId, :moduleId)';
    $parameters = [':questionText' => $questionText, ':fileToUpload' => $fileToUpload, ':studentId' => $studentId, ':moduleId' => $moduleId];
    query($pdo, $query, $parameters);
}




function updateQuestion($pdo, $questionid, $questionText)
{
    $query = 'UPDATE questions SET questionText = :questionText WHERE id = :id';
    $parameters = [':questionText' => $questionText, ':id' => $questionid];
    query($pdo, $query, $parameters);
}

function deleteQuestion($pdo, $id)
{
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM questions WHERE id = :id', $parameters);
}

##STUDENTS FUNCTIONS##

function allStudents($pdo)
{
    $student = query($pdo, 'SELECT * FROM students');
    return $student->fetchAll();
}

function getStudents($pdo, $id)
{
    $parameters = ['id' => $id];
    $query = query($pdo, 'SELECT * FROM students WHERE id = :id', $parameters);
    return $query->fetch();
}

function totalStudents($pdo)
{
    $query = query($pdo, 'SELECT COUNT(*) FROM students');
    $row = $query->fetch();
    return $row[0];
}

function insertStudent($pdo, $name, $email)
{
    $query = 'INSERT INTO students (`name` , email) VALUES (:name , :email)';
    $parameters = [':name' => $name, ':email' => $email];
    query($pdo, $query, $parameters);
}

function updateStudent($pdo, $studentid, $name, $email)
{
    $query = 'UPDATE students SET `name` = :name , email = :email WHERE id = :id';
    $parameters = [':name' => $name, ':id' => $studentid, ':email' => $email];
    query($pdo, $query, $parameters);
}

function deleteStudent($pdo, $id)
{
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM students WHERE id = :id', $parameters);
}


##MODULE FUNCTIONS##

function allModules($pdo)
{
    $module = query($pdo, 'SELECT * FROM modules');
    return $module->fetchAll();
}


function getModules($pdo, $id)
{
    $parameters = ['id' => $id];
    $query = query($pdo, 'SELECT * FROM modules WHERE id = :id', $parameters);
    return $query->fetch();
}

function totalModules($pdo)
{
    $query = query($pdo, 'SELECT COUNT(*) FROM modules');
    $row = $query->fetch();
    return $row[0];
}

function insertModule($pdo, $mod)
{
    $query = 'INSERT INTO modules (moduleName) VALUES (:moduleName)';
    $parameters = [':moduleName' => $mod];
    query($pdo, $query, $parameters);
}

function updateModule($pdo, $moduleid, $moduleName)
{
    $query = 'UPDATE modules SET moduleName = :moduleName WHERE id = :id';
    $parameters = [':moduleName' => $moduleName, ':id' => $moduleid];
    query($pdo, $query, $parameters);
}

function deleteModule($pdo, $id)
{
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM modules WHERE id = :id', $parameters);
}
