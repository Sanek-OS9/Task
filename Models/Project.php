<?php
namespace Models;

use \Core\DB;

/**
 * Работа с проектами
 */
abstract class Project
{
    # получаем список всех проектов
    static function getAll(): array
    {
        $q = DB::me()->query("SELECT * FROM `projects` ORDER BY `id` DESC");
        if ($projects = $q->fetchAll()) {
            return $projects;
        }
        return [];
    }
    # получем проект по его ID
    public static function getOne(int $id_project): array
    {
        $q = DB::me()->prepare("SELECT * FROM `projects` WHERE `id` = :id LIMIT 1");
        $q->bindParam(':id', $id_project, \PDO::PARAM_INT);
        $q->execute();
        if ($project = $q->fetch()) {
            return $project;
        }
        return [];
    }
    # удаляем один проект
    public static function deleteOne(int $id_project)
    {
        // удаляем все заказы с проекта
        $q = DB::me()->prepare("DELETE FROM `tasks` WHERE `id_project` = :id_project LIMIT 1");
        $q->bindParam(':id_project', $id_project, \PDO::PARAM_INT);
        $q->execute();
        // удаляем проект
        $q = DB::me()->prepare("DELETE FROM `projects` WHERE `id` = :id LIMIT 1");
        $q->bindParam(':id', $id_project, \PDO::PARAM_INT);
        $q->execute();
    }
}
