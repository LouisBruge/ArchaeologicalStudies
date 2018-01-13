CREATE TABLE address (
    id SMALLSERIAL PRIMARY KEY,
    street VARCHAR NOT NULL,
    complement_street VARCHAR,
    postal_code INT,
    city VARCHAR NOT NULL,
    cedex INT,
    employer SMALLINT REFERENCES employer (id)
);
