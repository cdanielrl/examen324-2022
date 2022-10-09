SELECT
'Num. Inscritos',
AVG(CASE WHEN persona.departamento='01' THEN 1 ELSE 0 END) AS 'Chuquisaca',
AVG(CASE WHEN persona.departamento='02' THEN 1 ELSE 0 END) AS 'La Paz',
AVG(CASE WHEN persona.departamento='03' THEN 1 ELSE 0 END) AS 'Cochabamba',
AVG(CASE WHEN persona.departamento='04' THEN 1 ELSE 0 END) AS 'Oruro',
AVG(CASE WHEN persona.departamento='05' THEN 1 ELSE 0 END) AS 'Potosí',
AVG(CASE WHEN persona.departamento='06' THEN 1 ELSE 0 END) AS 'Tarija',
AVG(CASE WHEN persona.departamento='07' THEN 1 ELSE 0 END) AS 'Santa Cruz',
AVG(CASE WHEN persona.departamento='08' THEN 1 ELSE 0 END) AS 'Beni',
AVG(CASE WHEN persona.departamento='09' THEN 1 ELSE 0 END) AS 'Pando'
FROM inscripcion,persona WHERE inscripcion.ci_estudiante=persona.ci
GROUP BY departamento
UNION
SELECT
'Promedio',
AVG(CASE WHEN persona.departamento='01' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Chuquisaca',
AVG(CASE WHEN persona.departamento='02' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'La Paz',
AVG(CASE WHEN persona.departamento='03' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Cochabamba',
AVG(CASE WHEN persona.departamento='04' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Oruro',
AVG(CASE WHEN persona.departamento='05' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Potosí',
AVG(CASE WHEN persona.departamento='06' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Tarija',
AVG(CASE WHEN persona.departamento='07' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Santa Cruz',
AVG(CASE WHEN persona.departamento='08' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Beni',
AVG(CASE WHEN persona.departamento='09' THEN nota1+nota2+nota3+nota_final ELSE 0 END) AS 'Pando'
FROM inscripcion,persona WHERE inscripcion.ci_estudiante=persona.ci
GROUP BY departamento