import React from "react";
import { createRoot } from "react-dom/client";

import {
  Container,
  Typography,
  Card,
  CardContent,
  Avatar,
  Grid,
  Chip,
  Box,
} from "@mui/material";

const el = document.getElementById("app");
const users = JSON.parse(el.dataset.users);

function App() {
  return (
    <Container maxWidth="md" sx={{ mt: 5 }}>

      {/* Header */}
      <Typography variant="h4" fontWeight="bold" gutterBottom>
        👥 User List
      </Typography>


      {/* Grid */}
      <Grid container spacing={2}>
        {users.map((u) => (
          <Grid item xs={12} sm={6} md={4} key={u.id}>

            <Card
              sx={{
                borderRadius: 3,
                transition: "0.3s",
                "&:hover": {
                  transform: "translateY(-6px)",
                  boxShadow: 6,
                },
              }}
            >
              <CardContent>

                {/* Avatar + Info */}
                <Box display="flex" alignItems="center" gap={2}>
                  <Avatar sx={{ bgcolor: "#6366f1" }}>
                    {u.name?.charAt(0).toUpperCase()}
                  </Avatar>

                  <Box>
                    <Typography fontWeight="bold">
                      {u.name}
                    </Typography>

                    <Typography variant="body2" color="text.secondary">
                      {u.email}
                    </Typography>
                  </Box>
                </Box>

                {/* Badge */}
                <Box mt={2}>
                  <Chip
                    label="Active"
                    color="success"
                    size="small"
                  />
                </Box>

              </CardContent>
            </Card>

          </Grid>
        ))}
      </Grid>

    </Container>
  );
}

createRoot(el).render(<App />);