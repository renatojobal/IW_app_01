
INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo`, `clave`, `tipoUser`) VALUES
(1, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(2, 0, 'hola', 'hola@gmail.com', '4d186321c1a7f0f354b297e8914ab240', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
