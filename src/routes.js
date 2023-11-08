import {Router}   from 'express';
import { mascota } from './controller.js';

export const router = Router()

router.get('/mascota', mascota.getAll);

//router.post('/mascota', mascota.add);

router.delete('/mascota', mascota.delete);

//router.delete('/libroIsbn', libro.deleteIsbn);

router.get('/mascota', mascota.getOne);