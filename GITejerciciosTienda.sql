-- 1. Obtener todos los detalles de todos los artículos de CÁCERES.

select * from articulos where ciudad = 'caceres'; 

-- 2. Obtener todos los valores de P para los proveedores que abastecen el artículo T1.

select *  from envios where  t = 't1';


-- 3. Obtener la lista de pares atributos(color,ciudad) de la tabla componentes eliminando
-- los pares duplicados.

select distinct(color), ciudad from componentes;

-- 4. Obtener la tabla de artículos los valores de T y ciudad donde el nombre de la ciudad
-- acaba en D o contiene al menos una E.
-- Estos son patrones, para otros ejemplos mirar en Pattern Matching.

select t, ciudad from articulos where (ciudad like '%d') or (ciudad like '%e%');


-- 5. Obtener los valores de P de los proveedores que suministran para el articulo T1
-- el componente C1.

select p,c,t from envios where c = 'c1' and t = 't1';

-- 6. Obtener los valores de TNombre en orden alfabético para los articulos abastecidos
-- por el proveedor P1.

select tnombre from articulos
  inner join envios 
  on articulos.t = envios.t
  where envios.p = 'p1'
  order by tnombre asc;



-- 7. Obtener los valores de C para los componentes suministrados para cualquier artículo de Madrid.


select distinct c 
 from envios inner join articulos
 on articulos.t = envios.t
 where articulos.ciudad = 'madrid';


-- 8. Obtener todos los valores de C de los componentes tales que ningún otro componente
-- tenga un valor inferior.


select c from componentes where peso = (select min(peso) from componentes); 


-- 9. Obtener los valores de P para los proveedores que suministren los articulos T1 y T2.

select distinct p1 from
(select p as p1 from envios where t='t1') as q1
join(select p as p2 from envios where t='t2') as q2
on q1.p1=q2.p2;

-- Esta es otra solución para ejercicio nueve. Con el IN.
select distinct p from envios
where p in(select p from envios where t='t1') and
p in(select p from envios where t='t2');



-- 10. Obtener los valores de P para los proveedores que suministran un artículo
-- de Sevilla o Madrid un componente rojo.

select p from componentes
inner join envios on componentes.c = envios.c
inner join articulos on envios.t = articulos.t
where componentes.color = 'rojo' and
(articulos.ciudad = 'sevilla' or articulos.ciudad = 'madrid');


-- 11.Obtener mediantes subconsultas, los valores de C para los componentes
-- suministrados para algún artículo de Sevilla por un proveedor de Sevilla.


select c from envios
where (envios.t) in(select t from articulos where ciudad = 'sevilla') and
(envios.p) in(select p from proveedores where ciudad = 'sevilla');




-- 12. Obtener los valores de T para los artículos que usan al menos un componente que se puede
-- obtener con el proveedor P1.

select * from articulos
 inner join envios
 on articulos.t = envios.t
 where envios.p = 'p1';


-- 13. Obtener todas las ternas(ciudad, c, ciudad) tales que un proveedor de la primera ciudad
-- suministre el componente especificado para un artículo montado en la segunda ciudad.

select proveedores.ciudad, envios.c, articulos.ciudad 
 from  proveedores 
 inner join envios 
 on  proveedores.p= envios.p
 inner join articulos 
 on articulos.t = envios.t;

 


-- 14. Repetir el ejercicio anterior pero sin recuperar las
-- ternas en los que los dos valores de ciudad sean los mismos.


select proveedores.ciudad,articulos.ciudad,envios.c
 from  proveedores 
 inner join envios 
 on  proveedores.p= envios.p
 inner join articulos 
 on articulos.t = envios.t where proveedores.ciudad != articulos.ciudad;

-- 15. Obtener el número de suministros, el de artículos distintos suministrados
-- y la cantidad total de artículos suministrados por el proveedor P2.

select  count(distinct(t)),
 sum(cantidad),
 count(c) from envios
 where envios.p = 'p2';



-- 16. Para cada artículo y componente suministrado obtener los valores de C y T
-- y la cantidad total correspondiente.


select c, t, sum(cantidad) from envios  group by c,t;

-- 17. Obtener los valores de T de los articulos abastecidos al menos por un proveedor
-- que no viva en Madrid y que no este en la misma ciudad que se monta el artículo.


select distinct envios.t from envios
inner join proveedores on(proveedores.ciudad <>'madrid')
inner join articulos on(articulos.ciudad <> proveedores.ciudad)
where envios.t = articulos.t and envios.p = proveedores.P
group by t;

-- 18. Obtener los valores de P para los proveedores que suministran al menos un componente
-- suministrado al menos por un proveedor que suministra al menos un componente rojo.




