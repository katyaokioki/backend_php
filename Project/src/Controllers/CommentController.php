<?php

namespace Controllers;

use View\View;
use Models\Comments\Comment;

class CommentController {
    private $view;

    public function __construct() {
        $this->view = new View(__DIR__ . '/../../templates/');
    }

    public function edit(int $id) {
        $comment = Comment::getById($id);
        if ($comment === null) {
            $this->view->renderHtml('errors/error.php', [], 404);
            return;
        }
        $this->view->renderHtml('comments/edit.php', ['comment' => $comment]);
    }

    public function update(int $id) {
        $comment = Comment::getById($id);
        if ($comment === null) {
            $this->view->renderHtml('errors/error.php', [], 404);
            return;
        }
        $comment->setContent($_POST['content']);
        $comment->save();
        header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/article/' . $comment->getArticleId());
    }

    public function delete(int $id) {
        $comment = Comment::getById($id);
        if ($comment !== null) {
            $comment->delete();
        }
        header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/article/' . $comment->getArticleId());
    }

    public function create() {
        $comment = new Comment();
        $comment->setArticleId($_POST['article_id']);
        $comment->setUserId($_POST['user_id']);
        $comment->setContent($_POST['content']);
        $comment->save();
        header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/article/' . $_POST['article_id']);
    }

    public function show(int $id) {
        $article = Article::getById($id);
        if ($article === null) {  
            $this->view->renderHtml('errors/error.php', [], 404);
            return;
        }
    
        // Для тестирования используем фиксированный ID пользователя
        $userId = 1; // Замените на реальный ID пользователя
        $user = User::getById($userId); // Получаем пользователя по ID
    
        // Получаем комментарии
        $comments = Comment::getAllByArticleId($id);
        $this->view->renderHtml('articles/show.php', [
            'article' => $article,
            'user' => $user, // Передаем пользователя в шаблон
            'comments' => $comments
        ]);
    }
}