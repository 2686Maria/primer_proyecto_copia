import { pool } from './database.js';

class mascotaController{

  async getAll(req, res){
      const [result] = await pool.query('SELECT * FROM mascota');
      
      res.json(result);
    }
      


      async delete(req, res){
        const mascota = req.body;
        const [result] = await pool.query('DELETE FROM mascota WHERE id=?', [mascota.id]);
        res.json({"Registros eliminados": result.affectedRows});
        
      }

      async update(req, res){
        const mascota = req.body;
        const [result] = await pool.query(`UPDATE mascota SET nombre=(?), raza=(?), edad=(?), tamaño=(?) WHERE id=(?)`, [mascota.nombre, mascota.raza, mascota.edad, mascota.tamaño,  
         mascota.id]);
        res.json({"Registros actualizados": result.changedRows});

    } 

       async getOne(req, res){
        const mascota = req.body;
        const id_mascota = parseInt(mascota.id);
        const [result] = await pool.query(`SELECT * FROM mascota WHERE id=?`, [id_mascota]);//obtenemos datos de un registro a partir del id

        if (result[0] != undefined) {
          res.json(result);
        }else{
          res.json({"Error" :"No se pudo encontrar el ID de la mascota"});
        }

        }
  } 

 export const mascota = new mascotaController();