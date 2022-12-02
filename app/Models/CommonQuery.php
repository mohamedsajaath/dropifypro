<?php

namespace App\Models;


trait CommonQuery
{
    public static function findById($id)
    {
        return self::findBy(['id' => $id]);
    }

    public static function findBy($whereCondition)
    {
        return self::query()->where($whereCondition)->first();
    }

    public static function selectBy($whereCondition)
    {
        return self::query()->where($whereCondition)->get();
    }

    public static function selectFirstEntry($whereCondition = [], $columns = [])
    {
        $rows = self::query()->where($whereCondition);

        if (!empty($columns)) {
            $rows = $rows->select($columns);
        }

        return $rows->first();
    }

    public static function deleteById($id)
    {
        self::deleteBy(['id' => $id]);
    }

    public static function deleteBy($whereCondition)
    {
        self::query()->where($whereCondition)->delete();
    }

    public static function updateById($id, $values)
    {
        self::updateBy(['id' => $id], $values);
    }

    public static function updateBy($whereCondition, $values)
    {
        self::query()->where($whereCondition)->update($values);
    }

    public static function getAll()
    {
        return self::query()->query()->get();
    }

    public static function increase($condition, $column, $value)
    {
        return self::query()->where($condition)
            ->increment($column, $value);
    }

    public static function getCount($condition = [])
    {
        return self::query()->where($condition)
            ->count();
    }

    public static function isExists($condition)
    {
        return self::query()->where($condition)
            ->exists();
    }

    public static function getPaginateResults($offset, $limit, $condition = [])
    {
        return self::query()->where($condition)
            ->orderBy('id')
            ->offset($offset)
            ->limit($limit)
            ->get();
    }
}