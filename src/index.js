import express from 'express';
import morgan from 'morgan';
import { router } from './routes.js';

const app = express();

app.set('port', 3000); //puerto que escucha las solicitudes

app.use(morgan('dev')); //para poder ver las solicitudes de los clientes

app.use(express.json()); //interpreta los objetos json de las solicitudes de los clientes

app.use(router);

//levantamos el servicio, callback propio de js 

app.listen(app.get('port'), ()=> {
    console.log(`Server on port ${app.get('port')}`);
})