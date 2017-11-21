CREATE TABLE incidencias
(
    id          INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT
  , corta       TEXT    NOT NULL
  , larga       TEXT    NOT NULL
  , prioridad   TEXT    NOT NULL CHECK (prioridad IN ('M', 'I', 'O'))
  , tipo        TEXT    NOT NULL CHECK (tipo IN ('F', 'A', 'T'))
  , complejidad TEXT    NOT NULL CHECK (complejidad IN ('F', 'M', 'D'))
  , entrega     INTEGER NOT NULL CHECK (entrega IN (1, 2, 3))
);
