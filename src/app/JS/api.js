const fs = require('fs')
const express = require('express')
const cors = require('cors')
const app = express()
const port = 3000

app.use(express.json())
app.use(cors())

//Swagger
const swaggerUi = require('swagger-ui-express'),
    swaggerDocument = require('../../../swagger.json');

app.use('/api-docs', swaggerUi.serve, swaggerUi.setup(swaggerDocument));

const { getPromotionsDB, findPromotionsDB, replacePromotionsDB, insertPromotionsDB, deletePromotionsDB,
    getUsersDB, findUsersDB, replaceUsersDB, insertUsersDB, deleteUsersDB,
    getUsersPromotionsDB,findUsersPromotionsDB,replaceUsersPromotionsDB,insertUsersPromotionsDB,deleteUsersPromotionsDB} = require('./maria_db')

app.listen(port, () => {
    console.log('Example app listening at http://localhost:3000/')
})

app.get('/promotions', (req, res) => {
    printLog(req)
    getPromotionsDB().then(v => res.send(v))
})
app.get('/users', (req, res) => {
    printLog(req)
    getUsersDB().then(v => res.send(v))
})
app.get('/UsersPromotions', (req, res) => {
    printLog(req)
    getUsersPromotionsDB().then(v => res.send(v))
})


app.get('/promotions/:id', (req, res) =>{
    printLog(req)
    const id = req.params.id
    findPromotionsDB(id)
        .then(promotion => {
            if (promotion) {
                res.send(promotion)
            } else {
                res.status(404).end()
            }
        })
})
app.get('/users/:id', (req, res) =>{
    printLog(req)
    const id = req.params.id
    findUsersDB(id)
        .then(user => {
            if (user) {
                res.send(user)
            } else {
                res.status(404).end()
            }
        })
})
app.get('/UsersPromotions/:utilisateur_id/:promotion_id', (req, res) =>{
    printLog(req)
    const utilisateur_id = req.params.utilisateur_id
    const promotion_id = req.params.promotion_id
    findUsersPromotionsDB(utilisateur_id,promotion_id)
        .then(UsersPromotions => {
            if (UsersPromotions) {
                res.send(UsersPromotions)
            } else {
                res.status(404).end()
            }
        })
})


const putOrPatchPromotion = (req, res) => {
    const { id, ...body } = req.body
    const promotionId = req.params.id
    findPromotionsDB(promotionId)
        .then(promotion => {
            if (promotion) {
                const newPromotion = Object.assign({}, promotion, body)
                replacePromotionsDB(promotionId, newPromotion).then(() => res.send(newPromotion))
            } else {
                res.status(404).end()
            }
        })
}
const putOrPatchUser = (req, res) => {
    const { id, ...body } = req.body
    const userId = req.params.id
    findUsersDB(userId)
        .then(user => {
            if (user) {
                const newUser = Object.assign({}, user, body)
                replaceUsersDB(userId, newUser).then(() => res.send(newUser))
            } else {
                res.status(404).end()
            }
        })
}
const putOrPatchUserPromotion = (req, res) => {
    const { utilisateur_id, promotion_id, ...body } = req.body
    const UserPromotionUtilisateur_id = req.params.utilisateur_id
    const UserPromotionPromotion_id = req.params.promotion_id
    findUsersPromotionsDB(UserPromotionUtilisateur_id, UserPromotionPromotion_id)
        .then(userpromotion => {
            if (userpromotion) {
                const newUserPromotion = Object.assign({}, userpromotion, body)
                replaceUsersPromotionsDB(UserPromotionUtilisateur_id, UserPromotionPromotion_id, newUserPromotion).then(() => res.send(newUserPromotion))
            } else {
                res.status(404).end()
            }
        })
}


app.put('/promotions/:id', putOrPatchPromotion)
app.put('/users/:id', putOrPatchUser)
app.put('/UsersPromotions/:utilisateur_id/:promotion_id', putOrPatchUserPromotion)


app.post('/promotions', (req, res) => {
    printLog(req)
    insertPromotionsDB(req.body)
        .then(promotion => res.status(201).send(promotion))
})
app.post('/users', (req, res) => {
    printLog(req)
    insertUsersDB(req.body)
        .then(user => res.status(201).send(user))
})
app.post('/UsersPromotions', (req, res) => {
    printLog(req)
    insertUsersPromotionsDB(req.body)
        .then(user => res.status(201).send(user))
})


app.delete('/promotions/:id', (req, res) => {
    printLog(req)
    deletePromotionsDB(req.params.id)
        .then(() => res.status(204).end())
})
app.delete('/users/:id', (req, res) => {
    printLog(req)
    deleteUsersDB(req.params.id)
        .then(() => res.status(204).end())
})
app.delete('/UsersPromotions/:utilisateur_id/:promotion_id', (req, res) => {
    printLog(req)
    deleteUsersDB(req.params.utilisateur_id,req.params.promotion_id)
        .then(() => res.status(204).end())
})


app.patch('/promotions/:id', putOrPatchPromotion)
app.patch('/users/:id', putOrPatchUser)
app.patch('/UsersPromotions/:utilisateur_id/:promotion_id', putOrPatchUserPromotion)


function printLog(req) {
    console.log("new Requete")
    console.log("  " + req.method + req.originalUrl) //La requete (methode + route)
    console.log("  " + req.headers['x-forwarded-for'] || req.socket.remoteAddress) //l'adresse ip de l'émeteur
    console.log("End Requete ")
}