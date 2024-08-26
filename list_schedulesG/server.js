const express = require('express');
const { graphqlHTTP } = require('express-graphql');
const schema = require('./schemas/schema');
const cors = require('cors');
require('dotenv').config();

const app = express();
const port = process.env.PORT || 3017;

app.use(cors());

app.use('/graphql', graphqlHTTP({
    schema,
    graphiql: true,
}));

app.listen(port, () => {
    console.log(`GraphQL API server running at http://localhost:${port}/graphql`);
});
