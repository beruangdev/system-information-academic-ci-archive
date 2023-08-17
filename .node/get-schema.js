import { createConnection } from "mysql2/promise";

await init();
async function init() {
  const connection = await createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "system-information-academic-ci",
  });

  await connection.connect();

  let tables = await connection.query("SHOW TABLES");
  tables = tables[0];
  const except = [
    "auth_groups_users",
    "auth_identities",
    "auth_logins",
    "auth_permissions_users",
    "auth_remember_tokens",
    "auth_token_logins",
    "migrations",
    "settings",
  ];
  let databaseStructure = {};
  for (let index = 0; index < tables.length; index++) {
    const row = tables[index];
    const tableName = Object.values(row)[0];

    if (except.includes(tableName)) break;

    const columns = await connection.query(`SHOW COLUMNS FROM ${tableName}`);
    databaseStructure[tableName] = columns;
    if (index == 0) {
    }
    console.log("🚀 ~ file: get-schema.js:26 ~ init ~ columns:",tableName, columns)
  }
  // console.log(JSON.stringify(databaseStructure, null, 2));
  await connection.end();
  return false;
}
