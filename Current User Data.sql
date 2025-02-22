SELECT
LinkUserClass.ID,
LinkUserClass.id_class,
LinkUserClass.id_user,
`class`.curse_id,
`class`.company_id,
`class`.teacher_id,
`class`.days,
`class`.duration,
`class`.evaluation_period,
`class`.hours,
`class`.active,
`class`.teacher_value,
`class`.`value`,
`class`.created_date,
`class`.`value` - `class`.teacher_value AS total
FROM LinkUserClass
INNER JOIN `class` ON LinkUserClass.id_class = `class`.id
WHERE (`class`.company_id = ':user.company_id')
