import { Button } from "@mui/material";
import PropTypes from "prop-types";
import React from "react";
import { Logo } from "../Logo/Logo";
import { NavLinks } from "../NavLinks/NavLinks";
import "./style.css";

export const NavBar = ({
  type = "light",
  logoColorBlackClassName,
  override = (
    <Button
      color="primary"
      disableElevation={false}
      disabled={false}
      size="medium"
      variant="contained"
    >
      Télécharger mon CV
    </Button>
  ),
}) => {
  return (
    <header className={`nav-bar ${type}`} role="navigation">
      <Logo
        className={logoColorBlackClassName}
        color={type === "dark" ? "white" : "black"}
      />
      <nav className="pages">
        <NavLinks
          className="nav-links-instance"
          color={type === "dark" ? "white" : "black"}
          state="default"
          text="Projets"
        />
        <NavLinks
          className="instance-node"
          color={type === "dark" ? "white" : "black"}
          navLinksClassName="nav-links-3"
          state="default"
          text="À propos"
          workClassName="nav-links-2"
        />
        {override}
      </nav>
    </header>
  );
};

NavBar.propTypes = {
  type: PropTypes.oneOf(["dark", "light"]),
  logoColorBlackClassName: PropTypes.string,
  override: PropTypes.node,
};

import PropTypes from "prop-types";
import React from "react";
import "./nav-links.css";

export const NavLinks = ({
  state,
  color,
  className,
  navLinksClassName,
  workClassName,
  text = "Projets",
}) => {
  return (
    <div className={`nav-links color-${color} ${className}`}>
      <div className={`work-wrapper ${navLinksClassName}`}>
        <div className={`work ${workClassName}`}>{text}</div>
      </div>
    </div>
  );
};

NavLinks.propTypes = {
  state: PropTypes.oneOf(["default"]),
  color: PropTypes.oneOf(["black", "white"]),
  text: PropTypes.string,
};

import PropTypes from "prop-types";
import React from "react";
import "./logo.css";

export const Logo = ({ color, className }) => {
  return <div className={`logo ${color} ${className}`} />;
};

Logo.propTypes = {
  color: PropTypes.oneOf(["black", "white"]),
};