<?php

class PivotController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pivot
	 *
	 * @return Response
	 */
	public function AsignaturaPerfile()
	{
		/* Perfil 1: Cárnicos*/
		$perfile = Perfile::find(1);
		$asignatura = Asignatura::find(5001051);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001050);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000899);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000903);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 2: Cárnicos no alimentario */
		$perfile = Perfile::find(2);

		$asignatura = Asignatura::find(5000898);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000861);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001050);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 3: Vegetales */
		$perfile = Perfile::find(3);

		$asignatura = Asignatura::find(5000913);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000895);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001050);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 4: Lácteos */
		$perfile = Perfile::find(4);

		$asignatura = Asignatura::find(5000834);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000899);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000903);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001050);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 5: Ambiental */
		$perfile = Perfile::find(5);

		$asignatura = Asignatura::find(5000860);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 6: Economía */
		$perfile = Perfile::find(6);

		$asignatura = Asignatura::find(5000996);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000872);
		$perfile->asignaturas()->attach($asignatura);


		/* Perfil 7: Diseño y Uso */
		$perfile = Perfile::find(7);

		$asignatura = Asignatura::find(5000945);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000955);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000986);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000973);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 8: Diseño y Producción */
		$perfile = Perfile::find(8);

		$asignatura = Asignatura::find(5000953);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000948);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000959);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000972);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 9: Proyecto y Prospectiva */
		$perfile = Perfile::find(9);

		$asignatura = Asignatura::find(5000966);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000971);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000969);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000967);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000964);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000980);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000978);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000979);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000981);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 10: Suelos */
		$perfile = Perfile::find(10);

		$asignatura = Asignatura::find(5000837);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000892);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001023);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001128);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 11: Procesos agroindustriales */
		$perfile = Perfile::find(11);

		$asignatura = Asignatura::find(5000894);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001038);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 12: Maquinaria, mecanización y fuentes de energía */
		$perfile = Perfile::find(12);

		$asignatura = Asignatura::find(5000489);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001039);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000888);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001020);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 13: Energías alternativas */
		$perfile = Perfile::find(13);

		$asignatura = Asignatura::find(5000896);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000927);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001011);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 14: Suelos y Aguas */
		$perfile = Perfile::find(14);

		$asignatura = Asignatura::find(5000995);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001015);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 15: Recursos Hidrícos */
		$perfile = Perfile::find(15);

		$asignatura = Asignatura::find(5000885);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001018);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000887);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 16: Ecosistemas Marinos */
		$perfile = Perfile::find(16);

		$asignatura = Asignatura::find(5000921);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000929);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 17: Seguridad Alimentaria */
		$perfile = Perfile::find(17);

		$asignatura = Asignatura::find(5000758);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001046);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 18: Producción de materias primas vegetales */
		$perfile = Perfile::find(18);

		$asignatura = Asignatura::find(5000796);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000790);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000798);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 19: Servicios tecnológicos */
		$perfile = Perfile::find(19);

		$asignatura = Asignatura::find(5000842);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001144);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000257);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5001061);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000777);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 20: Sistemas de Producción Pecuaria */
		$perfile = Perfile::find(20);

		$asignatura = Asignatura::find(5000835);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000403);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000840);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000806);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 21: Nutrición animal */
		$perfile = Perfile::find(21);

		$asignatura = Asignatura::find(5000821);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000819);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000820);
		$perfile->asignaturas()->attach($asignatura);

		$asignatura = Asignatura::find(5000844);
		$perfile->asignaturas()->attach($asignatura);

		/* Perfil 22: Recursos Genéticos */
		$perfile = Perfile::find(22);

		$asignatura = Asignatura::find(1000010);
		$perfile->asignaturas()->attach($asignatura);

		return 'Asignados: Asignatura Perfile';
	}

	public function AsignaturaRequisito()
	{
		/* Requisito 1
		$asignatura = Asignatura::find(2);
		$requisito = Requisito::find(1);
		$requisito->asignaturas()->attach($asignatura);*/

		return 'Asignados: Asignatura Requisito';
	}
}