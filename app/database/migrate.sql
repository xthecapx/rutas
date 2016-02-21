#Actualizar programas.
INSERT INTO programas SELECT DISTINCT CONCAT(codigo_sede, codigo_facultad, codigo_programa) as completo, codigo_sede, sede, codigo_facultad, facultad, codigo_programa, programa FROM bases;

#Actualizar perfiles.
INSERT INTO perfiles (programa_id, perfil,total_creditos,descripcion) SELECT DISTINCT CONCAT(codigo_sede, codigo_facultad, codigo_programa) as completo, perfil, total_credito_perfil, descripcion_perfil FROM bases;

#Actualizar Asginaturas
INSERT INTO asignaturas (asignatura_id, asignatura, creditos, tipologia, agrupacion) SELECT DISTINCT CONCAT(codigo_asignatura, tipologia) as codigo_asignatura, asignatura, creditos_asignatura, tipologia, agrupacion FROM bases;

#Requisitos
INSERT INTO requisitos (requisito) SELECT DISTINCT prerequisito FROM bases;

#Asignatura_Requisito
INSERT INTO asignatura_requisito (asignatura_id, requisito_id)
SELECT DISTINCT codigo_asignatura, 
REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(prerequisito, "NO", 1)
		, "Física mecánica", 2)
		, "Bioquímica", 3)
		, "Química agroindustrial", 4)
		, "Macroeconomía", 5) 
		, "6 créditos de la agrupación Diseño uso", 6) 
		, "6 créditos de esta agrupación", 7) 
		, "18 créditos en componente de fundamentación", 8) 
		, "25 créditos en componente de fundamentación", 9) 
		, "Química orgánica", 10) 
		, "Ciencia del suelo", 11)
		, "Fundamentos de ingeniería de riegos", 12)
		, "Transferencia de calor", 13)
		, "Mecanismos", 14)
		, "Operaciones unitarias", 15)
		, "Electricidad y magnetismo", 16)
		, "Mecánica de fluidos", 17)
		, "Hidrología y climatología", 18)
		, "Ecosistemas estratégicos", 19)
		, "Ecología - probalidad y estadística", 20)
		, "Entomología", 21)
		, "Edafología", 22)
		, "Fisiología vegetal", 23)
		, "Fitopatología", 24)
		, "Agroecología", 25)
		, "Sistema de producción bovinos", 26)
		, "Enfoque de sistema de producción agropecuaria", 27)
		, "Nutrición aplicada", 28)
		, "Nutrición animal básica", 29) as prerequisito FROM bases;

#INSERT INTO tabtemp SELECT asignatura_id, requisito_id, COUNT(*) as repeticiones FROM asignatura_requisito GROUP BY asignatura_id, requisito_id HAVING COUNT(*) > 1;