import { pool } from './database.js';

class mascotaController{

   //consultar y ver todos los campos de la tabla

   async getAll(req, res) {
    try {
      const [result] = await pool.query('SELECT * FROM mascota');
      res.json(result);
    } catch (error) {
      console.log('Error al obtener mascotas:', error);
      res.status(500).json({ error: "Error en el servidor" });
    }
  }
      
  // Funcion para agregar una mascota con Try Catch//

    
  async add(req, res) {
    try {
      const mascota = req.body;
  
      // Verificar que solo los atributos requeridos estén presentes
      const atributosRequeridos = ['nombre', 'raza', 'edad', 'tamaño'];
      const atributosExtra = Object.keys(mascota).filter(attr => !atributosRequeridos.includes(attr));
  
      if (atributosExtra.length === 0) {
        const [result] = await pool.query(
          `INSERT INTO mascota(nombre, raza, edad, tamaño) VALUES( ?, ?, ?, ?)`,
          [mascota.nombre, mascota.raza, mascota.edad, mascota.tamaño]
        );
  
        if (result.insertId) {
          res.json({ "Id insertado": result.insertId });
        } else {
          res.json({ "error": "Error al ingresar un nueva mascota" });
        }
      } else {
        res.status(400).json({ "error": "Atributos no deseados en el objeto mascota: " + atributosExtra.join(', ') });
      }
    } catch (e) {
      console.log(e);
      res.status(500).json({ "error": "Error en el servidor" });
    }
  }

    async delete(req, res){
        const mascota = req.body;
        const [result] = await pool.query('DELETE FROM mascota WHERE id=?', [mascota.id]);
        res.json({"Registros eliminados": result.affectedRows});
        
    }


    async update(req, res){
      try {
          const mascota = req.body;
          const [result] = await pool.query(`UPDATE mascota SET nombre=(?), raza=(?), edad=(?), tamaño=(?)  WHERE id=(?)`,[mascota.nombre, mascota.raza, mascota.tamaño,  mascota.id]);
          if (result.changedRows === 0) {
              throw new Error('No se encontró una mascota con el ID proporcionado o los datos proporcionados ya existen.');
          }
          res.json({"Registros Actualizados": result.changedRows});
      } catch (error) {
          console.error(error);
          res.status(500).json({ error: 'Hubo un error al actualizar la amscota, compruebe los campos requeridos.' });
      }
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